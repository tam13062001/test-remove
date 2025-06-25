import { useMemo, useState, useEffect } from "@wordpress/element";
import { Tabs } from 'antd';
import { BaseProps } from "../core/get-props";


const { TabPane } = Tabs;

export type TeamMember = {
  name: string;
  role: string;
  image_url: string;
};

export type TeamGroup = {
  groupName: string;
  members: TeamMember[];
};

export type MemberProps = {
  teams?: TeamGroup[];
  defaultActiveKey?: string;
  tabBarGutter?: number;
  emptyMessage?: string;
};

const MemberCard = ({ name, role, image_url, groupName }: TeamMember & { groupName?: string }) => (
  <div className="w-full flex flex-col items-center">
    <img
      src={image_url}
      alt={name}
      className="w-full object-cover lg:mb-4"
    />
    <div className="pl-[35px] mt-4 flex flex-col items-start w-full">
      <div className="flex items-center gap-5">
        {groupName === "Founders" && (
          <div className="">
            <div className="w-[60px] h-1 bg-blue-600"></div>
            <p>&nbsp;</p>
          </div>
        )}
        <div className="">
          <h3 className="text-xl lg:text-2xl font-bold text-primary">
            {name}
          </h3>
          <p className="text-[16px] lg:text-xl text-black">
            {role}
          </p>
        </div>
      </div>
    </div>
  </div>
);

export default function Member(props: BaseProps<MemberProps>) {
  const [isMobile, setIsMobile] = useState(false);

  useEffect(() => {
    const check = () => setIsMobile(window.innerWidth <= 768);
    check();
    window.addEventListener("resize", check);
    return () => window.removeEventListener("resize", check);
  }, []);

  const {
    teams = [],
    defaultActiveKey = teams[0]?.groupName || '',
    tabBarGutter = 32,
    emptyMessage = 'Chưa có thành viên trong nhóm này.'
  } = props.data;

  const tabPanes = useMemo(() => (
    teams.map((group) => (
      <TabPane tab={group.groupName} key={group.groupName}>
        <div className={`grid grid-cols-1 ${group.groupName === "Founders" ? "md:grid-cols-3" : "md:grid-cols-4"} gap-6 lg:gap-8`}>
          {group.members.length > 0 ? (
            group.members.map((member, index) => (
              <MemberCard
                key={`${group.groupName}-${index}`}
                {...member}
                groupName={group.groupName}
              />
            ))
          ) : (
            <p className="text-gray-500">{emptyMessage}</p>
          )}
        </div>
      </TabPane>
    ))
  ), [teams, emptyMessage]);

  return (
    <div className="mx-auto px-4 py-6">
      {teams.length > 0 ? (
        <Tabs
  defaultActiveKey={defaultActiveKey}
  tabBarGutter={tabBarGutter}
  tabBarStyle={{ marginBottom: '2rem' }}
  renderTabBar={
    isMobile
      ? (props, DefaultTabBar) => {
          const { activeKey, panes, onTabClick } = props;
          return (
            <div className="flex gap-2 overflow-x-auto max-lg:pb-2">
              {Array.isArray(panes) ? panes.map((pane) => {
                const isActive = pane.key === activeKey;
                return (
                  <a
                    key={pane.key}
                    onClick={() => onTabClick?.(pane.key, {} as any)}
                    className={`
                      px-4 py-2 rounded-full whitespace-nowrap break-words text-sm font-medium transition-all duration-200
                      ${isActive
                        ? ' text-primary border border-secondary'
                        : 'bg-primary text-white border border-primary'}
                    `}
                  >
                    {pane.props.tab}
                  </a>
                );
              }) : null}
            </div>
          );
        }
      : undefined // desktop: dùng mặc định
  }
  className="
    lg:[&_.ant-tabs-nav]:container
    lg:[&_.ant-tabs-nav]:center
    lg:[&_.ant-tabs-nav]:px-[64px]
    lg:[&_.ant-tabs-nav]:border-none
    lg:[&_.ant-tabs-nav]:border-b-0
    lg:[&_.ant-tabs-nav::before]:border-b-0
    lg:[&_.ant-tabs-tab]:border-none
    lg:[&_.ant-tabs-tab]:text-[20px]
    lg:[&_.ant-tabs-tab]:font-normal
    lg:[&_.ant-tabs-tab]:transition-all
    lg:[&_.ant-tabs-tab]:duration-200
    lg:[&_.ant-tabs-content]:border-none
    [&_.ant-tabs-tab]:whitespace-normal
    [&_.ant-tabs-tab]:break-words

  "
>
  {tabPanes}
</Tabs>

      ) : (
        <p className="text-gray-500">No teams available</p>
      )}
    </div>
  );
}
