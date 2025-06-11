import { useState, useEffect } from "@wordpress/element";
import { Tabs, message } from 'antd';

const { TabPane } = Tabs;

const teamData = {
  Founders: [
    {
      name: 'Nghia Nguyen',
      role: 'Co-founder',
      image: '/images/nghia.png',
    },
    {
      name: 'Nick Do',
      role: 'Co-founder',
      image: '/images/nick.png',
    },
    {
      name: 'Thang Nguyen',
      role: 'CIO - Chief of Information Officer',
      image: '/images/thang.png',
    },
  ],
  'Software Engineers': [],
  'Platform Engineers': [],
  'Data Engineers': [],
  'Software Quality': [],
  'Governance': [],
};

const MemberCard = ({ name, role, image }) => (
  <div className="flex flex-col items-center text-center p-4">
    <img
      src={image}
      alt={name}
      className="w-36 h-36 object-cover rounded-lg shadow-md"
    />
    <div className="mt-3 text-blue-700 font-semibold">{name}</div>
    <div className="text-sm text-gray-500">{role}</div>
  </div>
);

const Member = () => {
  return (
    <div className="container mx-auto px-4 py-6">
      <Tabs defaultActiveKey="Founders" tabBarGutter={32}>
        {Object.entries(teamData).map(([group, members]) => (
          <TabPane tab={group} key={group}>
            <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
              {members.length > 0 ? (
                members.map((member, index) => (
                  <MemberCard
                    key={index}
                    name={member.name}
                    role={member.role}
                    image={member.image}
                  />
                ))
              ) : (
                <p className="text-gray-500">Chưa có thành viên trong nhóm này.</p>
              )}
            </div>
          </TabPane>
        ))}
      </Tabs>
    </div>
  );
};

export default Member;
