import { MediaUpload, MediaUploadCheck, useBlockProps } from '@wordpress/block-editor';
import { TextControl, Button } from '@wordpress/components';
import { Fragment } from '@wordpress/element';

export default function Edit({ attributes, setAttributes }) {
  const { title, heading, image_url, items = [] } = attributes;

  const updateItem = (index, value) => {
    const newItems = [...items];
    newItems[index].content = value;
    setAttributes({ items: newItems });
  };

  const addItem = () => {
    setAttributes({ items: [...items, { content: '' }] });
  };

  const removeItem = (index) => {
    const newItems = [...items];
    newItems.splice(index, 1);
    setAttributes({ items: newItems });
  };

  return (
    <div {...useBlockProps()}>
      <TextControl label="Title" value={title} onChange={(val) => setAttributes({ title: val })} />
      <TextControl label="Heading" value={heading} onChange={(val) => setAttributes({ heading: val })} />

      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => setAttributes({ image_url: media.url })}
          allowedTypes={['image']}
          render={({ open }) => (
            <Button variant="secondary" onClick={open}>
              {image_url ? 'Thay đổi hình ảnh' : 'Tải ảnh lên'}
            </Button>
          )}
        />
      </MediaUploadCheck>

      {image_url && <img src={image_url} style={{ maxWidth: '100%', margin: '10px 0' }} alt="" />}

      <h4>Nội dung danh sách</h4>
      {items.map((item, index) => (
        <Fragment key={index}>
          <TextControl
            label={`Item ${index + 1}`}
            value={item.content}
            onChange={(val) => updateItem(index, val)}
          />
          <Button variant="link" onClick={() => removeItem(index)}>Xoá</Button>
        </Fragment>
      ))}
      <Button variant="primary" onClick={addItem}>+ Thêm item</Button>
    </div>
  );
}
