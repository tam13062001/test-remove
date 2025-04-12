import {BaseProps} from "../core/get-props";
import {Collapse, ConfigProvider} from "antd";
import {ArrowRightOutlined, MinusOutlined, PlusOutlined} from "@ant-design/icons";
import {useCallback} from "@wordpress/element";

type OurValueCollapseProps = {
  title: string
  content_text: string
  open: boolean
}

export default function OurValueItemBlock(props: BaseProps<OurValueCollapseProps>) {
  const { title, content_text, open } = props.data

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

  return (
    <ConfigProvider
      theme={{
        components: {
          Collapse: {
            headerPadding: '20px 0',
            contentPadding: '0px'
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
              {title}
            </div>
          )}
        >
          <div>
            { content_text }
          </div>
        </Collapse.Panel>
      </Collapse>
    </ConfigProvider>


  )
}