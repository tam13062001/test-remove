import { useMemo } from "@wordpress/element";
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
    <div className=" mx-auto px-4 py-6">
      {teams.length > 0 ? (
        <div className="">
          <Tabs
            defaultActiveKey={defaultActiveKey}
            tabBarGutter={tabBarGutter}
            
            tabBarStyle={{ marginBottom: '2rem' }}
            className="
              [&_.ant-tabs-nav]:container
              [&_.ant-tabs-nav]:center
              [&_.ant-tabs-nav]:px-[64px]
              [&_.ant-tabs-nav]:border-none
              [&_.ant-tabs-nav]:border-b-0
              [&_.ant-tabs-nav::before]:border-b-0
              [&_.ant-tabs-tab]:border-none
              [&_.ant-tabs-tab]:text-[20px]
              [&_.ant-tabs-tab]:font-normal
              [&_.ant-tabs-tab]:transition-all
              [&_.ant-tabs-tab]:duration-200
              [&_.ant-tabs-ink-bar]:hidden
              [&_.ant-tabs-content]:border-none
            "
          >
            {tabPanes}
          </Tabs>
        </div>
      ) : (
        <p className="text-gray-500">No teams available</p>
      )}
    </div>
  );
}