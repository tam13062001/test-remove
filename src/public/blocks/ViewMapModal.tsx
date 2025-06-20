import React from 'react';
import {BaseProps} from "../core/get-props";
import {Button, Modal} from "antd";
import {CloseOutlined} from "@ant-design/icons";

type ViewMapModalProps = {
  attributes?: {
    image_url?: string;
  };
};

const ViewMapModal: React.FC<BaseProps<ViewMapModalProps>> = (props) => {
  const { attributes } = props.data
  const [isOpen, setIsOpen] = React.useState(false);
  const image_url = attributes?.image_url;

  const onCloseModalBtnClick = () => {
    setIsOpen(false)
  }

  const onOpenModalBtnClick = () => {
    setIsOpen(true)
  }

  // todo embed a map, it is not only an image

  return (
    <>
      <button
        className="btn"
        onClick={onOpenModalBtnClick}
      >
        View On Map
      </button>

      <Modal
        footer={null}
        width={'80%'}
        open={isOpen}
        onCancel={onCloseModalBtnClick}
        styles={{
          content: { padding: 0 },
          body: { padding: 0 }
        }}
        closeIcon={null}
      >
        <div className={'relative'}>
          <div className={'absolute right-0 top-0 translate-x-1/2 -translate-y-1/2'}>
            <Button size={'small'} shape={'circle'} icon={<CloseOutlined />} onClick={onCloseModalBtnClick} />
          </div>
          {image_url ? (
            <img
              src={image_url}
              alt="Map"
              className="lg:h-[721px]  w-full h-full object-cover"
            />
          ) : (
            <p>No image provided</p>
          )}
        </div>
      </Modal>
    </>
  );
};

export default ViewMapModal;