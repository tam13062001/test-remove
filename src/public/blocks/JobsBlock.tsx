import { useEffect, useState } from "@wordpress/element";
import { Tabs, Spin } from "antd";
import type { BaseProps } from "../core/get-props";

const { TabPane } = Tabs;

export type JobPost = {
  id: number;
  title: string;
  permalink: string;
  categories: string;
  country?: string;
};

export type Country = {
  name: string;
};

export type JobsResponse = {
  posts: JobPost[];
  countries: Country[];
  pagination: {
    total_pages: number;
    current_page: number;
  };
  message?: string;
};

export default function Jobs() {
  const [data, setData] = useState<JobsResponse | null>(null);
  const [loading, setLoading] = useState(true);
  const [isMobile, setIsMobile] = useState(false);
  const [activeTab, setActiveTab] = useState<string>('all');

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

  if (!data || !Array.isArray(data.posts) || data.posts.length === 0) {
    return <p className="text-gray-500 text-center my-10">{data?.message || 'No jobs available.'}</p>;
  }

  // Lấy danh sách country từ API (data.countries)
  const countryList = data.countries || [];

  // Group posts theo country name
  const groupedPosts: Record<string, JobPost[]> = {};
  countryList.forEach(country => {
    groupedPosts[country.name] = [];
  });
  data.posts.forEach(post => {
    const country = post.country || 'Other';
    if (!groupedPosts[country]) {
      groupedPosts[country] = [];
    }
    groupedPosts[country].push(post);
  });

  // Convert to array cho render tab
  const groups = Object.entries(groupedPosts).map(([groupName, posts]) => ({
    groupName,
    posts
  }));

  return (
    <div className="container lg:pt-[100px]">
      <Tabs
        activeKey={activeTab}
        onChange={setActiveTab}
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
        <TabPane tab="All" key="all">
          <div className="grid lg:grid-cols-2 grid-cols-1 gap-6 lg:gap-8">
            {data.posts.map((post, index) => (
              <a 
                key={index} 
                href={post.permalink}
                className="flex justify-between items-start border-b py-4 cursor-pointer"
              >
                <div>
                  <h3 className="font-bold text-[20px] lg:text-[24px] text-black">{post.title}</h3>
                  <p className="text-[16px] lg:text-[20px] text-black mt-1">
                    {post.categories}
                  </p>
                </div>
                <span className="text-[20px] text-gray-400">{">"}</span>
              </a>
            ))}
          </div>
        </TabPane>
        
        {groups.map((group) => (
          <TabPane tab={group.groupName} key={group.groupName}>
            {group.posts.length === 0 ? (
              <div className="text-gray-500 text-center my-10">No jobs in this country</div>
            ) : (
              <div className="grid lg:grid-cols-2 grid-cols-1 gap-6 lg:gap-8">
                {group.posts.map((post, index) => (
                  <a
                    key={index}
                    href={post.permalink}
                    className="flex justify-between items-start border-b py-4 cursor-pointer"
                  >
                    <div>
                      <h3 className="font-bold text-[20px] lg:text-[24px] text-black">{post.title}</h3>
                      <p className="text-[16px] lg:text-[20px] text-black mt-1">
                        {post.categories}
                      </p>
                    </div>
                    <span className="text-[20px] text-gray-400">{">"}</span>
                  </a>
                ))}
              </div>
            )}
          </TabPane>
        ))}
      </Tabs>
    </div>
  );
}