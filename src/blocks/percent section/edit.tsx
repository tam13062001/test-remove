import { useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { TextControl, Button } from '@wordpress/components';
import { Fragment } from '@wordpress/element';

export default function Edit({ attributes, setAttributes }) {
  const { title, heading, percent, percent_content, image_url, items } = attributes;

  const updateItem = (index: number, value: string) => {
    const newItems = [...items];
    newItems[index].content = value;
    setAttributes({ items: newItems });
  };

  const addItem = () => setAttributes({ items: [...items, { content: '' }] });
  const removeItem = (index: number) => {
    const newItems = [...items];
    newItems.splice(index, 1);
    setAttributes({ items: newItems });
  };

  return (
    <div {...useBlockProps()}>
      <TextControl label="Title" value={title} onChange={(val) => setAttributes({ title: val })} />
      <TextControl label="Heading" value={heading} onChange={(val) => setAttributes({ heading: val })} />

      <h4>Items (dùng cú pháp: Label: Nội dung)</h4>
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
      <Button variant="primary" onClick={addItem}>+ Add Item</Button>

      <TextControl
        label="Percent (VD: 89%)"
        value={percent}
        onChange={(val) => setAttributes({ percent: val })}
      />
      <TextControl
        label="Percent Content"
        value={percent_content}
        onChange={(val) => setAttributes({ percent_content: val })}
      />

      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => setAttributes({ image_url: media.url })}
          allowedTypes={['image']}
          render={({ open }) => (
            <Button onClick={open} variant="secondary">
              {image_url ? 'Thay ảnh' : 'Tải ảnh lên'}
            </Button>
          )}
        />
      </MediaUploadCheck>
      {image_url && (
        <img src={image_url} style={{ maxWidth: '100%', marginTop: 10 }} alt="" />
      )}
    </div>
  );
}
