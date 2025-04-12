import {getProps} from "./get-props";
import {getComponent} from "./get-component";
import * as ReactDOM from 'react-dom'
import {createRoot} from "@wordpress/element";
import {ConfigProvider, ThemeConfig} from "antd";

const config: ThemeConfig = {
  token: {
    fontFamily: 'inherit',
    // @ts-ignore
    fontSize: 'inherit'
  }
}

export const load = (container: HTMLElement) => {
  const props = getProps(container)
  const Component: any = getComponent(container)

  if (ReactDOM.version.startsWith('18')) {
    const root = createRoot(container)
    root.render((
      <ConfigProvider theme={config}>
        <Component {...props} />
      </ConfigProvider>
    ))
  }
}