import { useEffect, useState } from "@wordpress/element";
import { Tabs, Spin } from "antd";
import type { BaseProps } from "../core/get-props";

const { TabPane } = Tabs;

export type JobPosting = {
  title: string;
  category: string;
  location: string;
  type: string;
};

export type JobGroup = {
  groupName: string;
  jobs: JobPosting[];
};

export default function Jobs() {
  const [data, setData] = useState<{ job: JobGroup[]; defaultActiveKey: string; emptyMessage: string } | null>(null);
  const [loading, setLoading] = useState(true);
  const [isMobile, setIsMobile] = useState(false);

  useEffect(() => {
    fetch("/index.php?rest_route=/datum/v1/grouped-jobs")
      .then(res => res.json())
      .then(data => {
        console.log("Fetched jobs data:", data);
        setData(data);
        setLoading(false);
      });
  }, []);

  useEffect(() => {
    const check = () => setIsMobile(window.innerWidth <= 768);
    check();
    window.addEventListener("resize", check);
    return () => window.removeEventListener("resize", check);
  }, []);

  if (loading) return <Spin className="block mx-auto my-10" />;

 if (!data || !Array.isArray(data.job) || data.job.length === 0)
  return <p className="text-gray-500 text-center my-10">No jobs available.</p>;


  return (
    <div className="container lg:pt-[100px]">
      <Tabs
        defaultActiveKey={data.defaultActiveKey}
        tabBarGutter={32}
        renderTabBar={
          isMobile
            ? (props, DefaultTabBar) => {
                const { activeKey, panes, onTabClick } = props;
                return (
                  <div className="flex gap-2 overflow-x-auto max-lg:pb-2">
                    {Array.isArray(panes) &&
                      panes.map((pane) => {
                        const isActive = pane.key === activeKey;
                        return (
                          <a
                            key={pane.key}
                            onClick={() => onTabClick?.(pane.key, {} as any)}
                            className={`px-5 py-2 rounded-full whitespace-nowrap text-sm font-medium transition-all duration-200 ${
                              isActive
                                ? "text-primary border border-secondary"
                                : "bg-primary text-white border border-primary"
                            }`}
                          >
                            {pane.props.tab}
                          </a>
                        );
                      })}
                  </div>
                );
              }
            : undefined
        }
        className="lg:[&_.ant-tabs-nav]:border-none lg:[&_.ant-tabs-tab]:text-[20px]"
      >
        {data.job.map((group) => (
          <TabPane tab={group.groupName} key={group.groupName}>
            <div className="grid lg:grid-cols-2 grid-cols-1 gap-6 lg:gap-8">
              {group.jobs.length > 0 ? (
                group.jobs.map((job, index) => (
                  <div key={index} className="flex justify-between items-start border-b py-4 hover:bg-gray-50 transition">
                    <div>
                      <h3 className="font-bold text-[20px] lg:text-[24px] text-black">{job.title}</h3>
                      <p className="text-[16px] lg:text-[20px] text-black mt-1">
                        {job.category}
                        <span className="px-3">·</span>
                        {job.location}
                        <span className="px-3">·</span>
                        {job.type}
                      </p>
                    </div>
                    <span className="text-[20px] text-gray-400">{">"}</span>
                  </div>
                ))
              ) : (
                <p className="text-gray-500">{data.emptyMessage}</p>
              )}
            </div>
          </TabPane>
        ))}
      </Tabs>
    </div>
  );
}
