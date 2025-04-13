import {BaseProps} from "../core/get-props";
import {Collapse, ConfigProvider} from "antd";
import {ArrowRightOutlined, MinusOutlined, PlusOutlined} from "@ant-design/icons";
import {useCallback} from "@wordpress/element";

type OurValueCollapseProps = {
  country: string
  locations: { title: string; address: string }[]
  open: boolean
}

export default function LocationItemBlock(props: BaseProps<OurValueCollapseProps>) {
  const { country, locations, open } = props.data

  const renderIcon = useCallback((isActive: boolean) => {
    if (isActive) return (
      <div className={'pt-2'}>
        <MinusOutlined className={'text-secondary'} />
      </div>
    )
    return (
      <div className={'pt-2'}>
        <PlusOutlined className={'text-secondary'} />
      </div>
    )
  }, [])

  const renderContent = useCallback(() => {
    if (!Array.isArray(locations)) return null

    return locations.map((location, index) => (
      <div className={'mb-2'}>
        <div className={'font-bold mb-2'}>{location.title}</div>
        <div>{location.address}</div>
      </div>
    ))
  }, [])

  return (
    <ConfigProvider
      theme={{
        components: {
          Collapse: {
            headerPadding: '20px 0',
            contentPadding: '24px 0'
          }
        }
      }}
    >
      <Collapse
        defaultActiveKey={open ? '1' : null}
        expandIconPosition={'end'}
        ghost
        expandIcon={({ isActive }) => renderIcon(isActive)}
      >
        <Collapse.Panel
          key={'1'}
          header={(
            <div className={'font-[700] text-primary text-[24px]'}>
              {country}
            </div>
          )}
        >
          {renderContent()}
        </Collapse.Panel>
      </Collapse>
    </ConfigProvider>
  )
}