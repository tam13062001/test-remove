import React, { useState } from 'react';
import { Card, Table, Modal, Button } from 'antd';
import { 
  UpOutlined, 
  DownOutlined, 
  CloseOutlined,
  EnvironmentOutlined 
} from '@ant-design/icons';

const Locations = ({ locationsData }) => {
  const [expandedLocation, setExpandedLocation] = useState(null);
  const [isMapModalVisible, setIsMapModalVisible] = useState(false);
  const [selectedLocation, setSelectedLocation] = useState(null);

  const toggleLocation = (id) => {
    if (expandedLocation === id) {
      setExpandedLocation(null);
    } else {
      setExpandedLocation(id);
    }
  };

  const handleViewMap = (location) => {
    setSelectedLocation(location);
    setIsMapModalVisible(true);
  };

  const handleMapModalClose = () => {
    setIsMapModalVisible(false);
  };

  const checklistColumns = [
    {
      title: 'Country',
      dataIndex: 'country',
      key: 'country',
    },
    {
      title: 'Status',
      dataIndex: 'available',
      key: 'available',
      render: (available) => (
        <span className={available ? 'text-green-500' : 'text-red-500'}>
          {available ? '✅' : '❌'}
        </span>
      ),
    },
  ];

  return (
    <div className="bg-lightblue px-8 lg:px-[115px] py-4 lg:py-20">
      {locationsData.map((country) => (
        <div key={country.id} className="mb-8 last:mb-0">
          {country.checklist ? (
            <div className="mt-6">
              <h2 className="text-2xl font-semibold text-gray-800 mb-4">{country.name}</h2>
              <Table
                columns={checklistColumns}
                dataSource={country.checklist.map((item, index) => ({
                  key: index,
                  country: item.country,
                  available: item.available
                }))}
                pagination={false}
                bordered={false}
                className="bg-transparent"
              />
            </div>
          ) : (
            <>
              <h2 className="text-2xl font-semibold text-gray-800 mb-4">{country.name}</h2>
              {country.offices.map((office) => (
                <Card 
                  key={office.id} 
                  className="mb-4 bg-transparent border-none shadow-none"
                >
                  <div className="flex justify-between items-center bg-white p-6 rounded-lg">
                    <h3 className="text-lg font-medium text-gray-800">{office.name}</h3>
                    <div className="flex space-x-2">
                      <Button
                        type="primary"
                        icon={<EnvironmentOutlined />}
                        onClick={() => handleViewMap(office)}
                        className="flex items-center bg-blue-600 hover:bg-blue-700"
                      >
                        View Map
                      </Button>
                      <Button
                        type="text"
                        icon={expandedLocation === office.id ? <UpOutlined /> : <DownOutlined />}
                        onClick={() => toggleLocation(office.id)}
                        className="text-gray-600 hover:text-gray-800"
                      />
                    </div>
                  </div>
                  
                  {expandedLocation === office.id && (
                    <div className="mt-2 pl-2 pt-4 bg-white p-6 rounded-b-lg">
                      <p className="text-gray-600">{office.address}</p>
                      {office.city && <p className="text-gray-600">{office.city}</p>}
                      {office.phone && <p className="text-gray-600">Phone: {office.phone}</p>}
                      {office.email && <p className="text-gray-600">Email: {office.email}</p>}
                    </div>
                  )}
                </Card>
              ))}
            </>
          )}
        </div>
      ))}
      
      <Modal
        title={selectedLocation?.name}
        open={isMapModalVisible}
        onCancel={handleMapModalClose}
        footer={null}
        width={800}
        closeIcon={<CloseOutlined className="text-gray-500" />}
        className="location-map-modal"
      >
        <div className="h-96 w-full">
          <iframe
            title="Office Location"
            width="100%"
            height="100%"
            frameBorder="0"
            scrolling="no"
            marginHeight={0}
            marginWidth={0}
            src={`https://maps.google.com/maps?q=${encodeURIComponent(selectedLocation?.address || '')}&output=embed`}
            className="border-0"
          ></iframe>
        </div>
        <div className="mt-4">
          <p className="text-gray-700">{selectedLocation?.address}</p>
          {selectedLocation?.city && <p className="text-gray-700">{selectedLocation?.city}</p>}
        </div>
      </Modal>
    </div>
  );
};

export default Locations;