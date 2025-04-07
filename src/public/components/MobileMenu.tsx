import {BaseProps} from "../core/get-props";
import {Button, ConfigProvider, Drawer, Menu} from "antd";
import {useCallback, useMemo, useState} from "@wordpress/element";
import {CloseOutlined} from "@ant-design/icons";

type MenuItem = {
  ID: number
  children: MenuItem[]
  parent: string|number
  title: string
  url: string
}

type MobileMenuProps = {
  logo_url: string
  data: MenuItem[]
}

export default function MobileMenu(props: BaseProps<MobileMenuProps>) {
  const { data, logo_url } = props.data
  const [open, setOpen] = useState(false)
  const menuData = useMemo(() => {
    const getItems = (item: any) => {
      const data: any = {
        key: item.ID,
        label: item.title
      }
      if (Array.isArray(item.children) && item.children.length > 0) {
        data.children = data.children.map(getItems)
      }
      return data
    }
    if (!Array.isArray(data)) return []

    return data.map(item => {
      const data: any = {
        key: item.ID,
        label: item.title
      }

      if (Array.isArray(item.children) && item.children.length > 0) {
        data.children = item.children.map(getItems)
      }
      return data
    })
  }, [data])

  const onItemSelect = (info: any) => {
    const item = data.find(item => info.key == item.ID)
    if (item) {
      window.location.href = item.url
    }
  }

  return (
    <div>
      <div className={'cursor-pointer'} onClick={() => setOpen(true)}>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M21.1875 3.75H2.8125C2.70937 3.75 2.625 3.83437 2.625 3.9375V5.4375C2.625 5.54062 2.70937 5.625 2.8125 5.625H21.1875C21.2906 5.625 21.375 5.54062 21.375 5.4375V3.9375C21.375 3.83437 21.2906 3.75 21.1875 3.75ZM21.1875 18.375H2.8125C2.70937 18.375 2.625 18.4594 2.625 18.5625V20.0625C2.625 20.1656 2.70937 20.25 2.8125 20.25H21.1875C21.2906 20.25 21.375 20.1656 21.375 20.0625V18.5625C21.375 18.4594 21.2906 18.375 21.1875 18.375ZM21.1875 11.0625H2.8125C2.70937 11.0625 2.625 11.1469 2.625 11.25V12.75C2.625 12.8531 2.70937 12.9375 2.8125 12.9375H21.1875C21.2906 12.9375 21.375 12.8531 21.375 12.75V11.25C21.375 11.1469 21.2906 11.0625 21.1875 11.0625Z" fill="white"/>
        </svg>
      </div>
      <Drawer
        zIndex={1000000}
        open={open}
        onClose={() => setOpen(false)}
        styles={{
          wrapper: { width: '100%' },
          content: { padding: 0, height: '100vh', zIndex: 100000000 },
          body: { padding: 0 },
          header: { display: "none" }
        }}
      >
        <div className={'bg-gradient-to-br from-secondary to-primary h-full text-white px-5'}>
          <div className={'flex justify-between p-5'}>
            <img className={'h-7'} src={logo_url} />
            <Button className={'text-white'} type={'text'} icon={<CloseOutlined />} onClick={() => setOpen(false)} />
          </div>
          <ConfigProvider
          theme={{
            components: {
              Menu: {
                colorBgBase: 'transparent',
                popupBg: 'transparent',
                itemBg: 'transparent',
                itemColor: '#ffffff'
              }
            }
          }}
          >
            <Menu mode={'inline'} items={menuData} onSelect={onItemSelect} />
          </ConfigProvider>
        </div>
      </Drawer>
    </div>
  )
}