import {Button, Checkbox, ConfigProvider, Form, Input, message, Select, Typography} from "antd";
import axios from "axios";
import {useState} from "@wordpress/element";
import CountrySelector from "../components/CountrySelector/CountrySelector";
import useBreakpoint from "../hooks/useBreakpoint";

export default function ContactFormBlock() {
  const [error, setError] = useState<string>()
  const [showSuccess, setShowSuccess] = useState(false)
  const isMobile = useBreakpoint()

  const onSubmit = (values: Record<string, any>) => {
    setError(undefined)
    // if enabled permalink, change path to /wp-json/datum/v1/save-contact
    axios.post('/index.php?rest_route=/datum/v1/save-contact', values)
      .then(e => {
        setShowSuccess(true)
      })
      .catch(e => {
        setError(e.message)
      })
  }

  const onResubmitBtnClick = () => {
    setShowSuccess(false)
  }

  const renderContent = () => {
    if (showSuccess) return (
      <div className={'lg:mt-[320px]'}>
        <div className={'mb-4'}>Thank you! Your information has been saved</div>
        <div className={'text-[16px] text-primary'} onClick={onResubmitBtnClick}>Submit another information</div>
      </div>
    )

    return (
      <Form onFinish={onSubmit}>
        { error && (
          <Typography.Paragraph type={'danger'}>
            { error }
          </Typography.Paragraph>
        ) }

        <Form.Item
          name={'first_name'}
          rules={[
            {required: true, message: 'Firstname is required'}
          ]}
        >
          <Input placeholder={'First Name*'}/>
        </Form.Item>
        <Form.Item
          name={'last_name'}
          rules={[
            {required: true, message: 'Lastname is required'}
          ]}
        >
          <Input placeholder={'Last Name*'}/>
        </Form.Item>
        <Form.Item
          name={'email'}
          rules={[
            {required: true, message: 'Email is required'},
            {type: 'email', message: 'Email is not valid'},
          ]}
        >
          <Input placeholder={'Email*'}/>
        </Form.Item>
        <Form.Item
          name={'job'}
          rules={[
            {required: true, message: 'Job is required'}
          ]}
        >
          <Input placeholder={'Job Title*'}/>
        </Form.Item>
        <Form.Item
          name={'phone'}
          rules={[
            {required: true, message: 'Phone number is required'}
          ]}
        >
          <Input placeholder={'Phone Number*'}/>
        </Form.Item>
        <Form.Item
          name={'company'}
          rules={[
            {required: true, message: 'Company/Organization is required'}
          ]}
        >
          <Input placeholder={'Company/Organization*'}/>
        </Form.Item>
        <Form.Item
          name={'country'}
          rules={[
            { required: true, message: 'Country is required' }
          ]}
        >
          <CountrySelector
            placeholder={'Country*'}
            style={{ fontSize: 'inherit' }}
            allowClear
            showSearch
          />
        </Form.Item>
        <Form.Item
          name={'message'}
          rules={[
            { required: true, message: 'Please type your message' }
          ]}
        >
          <Input.TextArea
            placeholder={'Your Message*'}
            autoSize={{
              minRows: 3,
              maxRows: 4
            }}
          />
        </Form.Item>
        <Form.Item
          name={'agree_term_of_use'}
          valuePropName={'checked'}
          rules={[
            { required: true, message: 'You have not agree with term of use' }
          ]}
        >
          <Checkbox>
            <div className={'ml-2 text-[16px]'}>
              I agree to Datum collecting and processing my personal data to allow me to receive information on Datum
              services.
            </div>
          </Checkbox>
        </Form.Item>
        <div className={'mt-[50px]'}>
          <button className={'px-10'} type={'submit'}>Submit</button>
        </div>
      </Form>
    )
  }

  return (
    <ConfigProvider
      theme={{
        token: {
          fontSize: isMobile ? 16 : 20
        },
        components: {
          Input: {
            paddingBlock: 12,
            paddingInline: 20,
            paddingContentHorizontal: 20
          },
          Checkbox: {
            controlInteractiveSize: 20
          },
          Select: {}
        }
      }}
    >
      { renderContent() }
    </ConfigProvider>
  )
}