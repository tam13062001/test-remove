import {getProps} from "./get-props";
import {getComponent} from "./get-component";
import * as ReactDOM from 'react-dom'
import {createRoot} from "@wordpress/element";
import {ConfigProvider, ConfigProviderProps, ThemeConfig} from "antd";

export const load = (container: HTMLElement) => {
  const props = getProps(container)
  const Component = getComponent(container)

  const config: ThemeConfig = {
    token: {
      fontFamily: 'inherit',
      // @ts-ignore
      fontSize: 'inherit'
    }
  }

  if (ReactDOM.version.startsWith('18')) {
    const root = createRoot(container)
    // @ts-ignore
    root.render((
      <ConfigProvider theme={config}>
        <Component {...props} />
      </ConfigProvider>
    ))
  }
}