import axios from "axios";
import {useEffect, useState} from "@wordpress/element";
import {Table, Typography} from "antd";

export default function ContactPage() {
  const [error, setError] = useState<string>()
  const [data, setData] = useState<any[]>([])

  const loadContact = () => {
    axios.get('/index.php?rest_route=/datum/v1/contacts', {
      headers: {
        // @ts-ignore
        'X-WP-Nonce': window.wpApiSettings?.nonce // WP provides this if enqueued properly
      }
    })
      .then(response => {
        const body = response.data
        if (Array.isArray(body)) {
          const temp = body.map(item => ({
            id: item.id,
            ...(item.data || {})
          }))
          setData(temp)
        }
      })
      .catch(e => setError(e.message))
  }

  console.log(data)

  useEffect(() => {
    loadContact()
  }, []);

  return (
    <div style={{ marginTop: 20, paddingRight: 20 }}>
      <Typography.Title>Contacts</Typography.Title>
      <Table
        dataSource={data}
        columns={[
          { title: 'First Name' , dataIndex: 'first_name' },
          { title: 'Last Name' , dataIndex: 'first_name' },
          { title: 'Email' , dataIndex: 'email' },
          { title: 'Phone' , dataIndex: 'phone' },
          { title: 'Country' , dataIndex: 'country' },
          { title: 'Company' , dataIndex: 'company' },
          { title: 'Job' , dataIndex: 'job' },
          { title: 'Message' , dataIndex: 'message' },
        ]}
      />
    </div>
  )
}