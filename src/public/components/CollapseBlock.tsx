import {Collapse} from "antd";
import {BaseProps} from "../core/get-props";
import {ArrowRightOutlined} from "@ant-design/icons";


type CollapseBlockProps = {
  title: string
  content: string
}

export default function CollapseBlock(props: BaseProps<CollapseBlockProps>) {
  const { title, content } = props.data
  return (
    <Collapse
      expandIconPosition={'end'}
      ghost
      expandIcon={({ isActive }) => <div className={'!text-primary'}><ArrowRightOutlined className="mt-2" color={'#315cd4'} rotate={isActive ? 90 : 0} /></div>}
    >
      <Collapse.Panel key={'1'} header={(
        <div className={'font-[700] text-primary -ml-4'}>
          {title}
        </div>
      )} >
        { content }
      </Collapse.Panel>
    </Collapse>
  )
}