import { useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { Button, TextControl } from '@wordpress/components';
import { Fragment } from '@wordpress/element';

export default function Edit({ attributes, setAttributes }) {
  const { title, image_url, items } = attributes;

  const updateItem = (index: number, field: string, value: string) => {
    const newItems = [...items];
    newItems[index][field] = value;
    setAttributes({ items: newItems });
  };

  const addItem = () => {
    const newItems = [...items, { title: '', content: '' }];
    setAttributes({ items: newItems });
  };

  const removeItem = (index: number) => {
    const newItems = [...items];
    newItems.splice(index, 1);
    setAttributes({ items: newItems });
  };

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Translation key - Title"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />

      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => setAttributes({ image_url: media.url })}
          allowedTypes={['image']}
          render={({ open }) => (
            <Button variant="secondary" onClick={open}>
              {image_url ? 'Change Image' : 'Upload Image'}
            </Button>
          )}
        />
      </MediaUploadCheck>

      {image_url && <img src={image_url} alt="" style={{ maxWidth: '100%', margin: '10px 0' }} />}

      <hr />

      <h3>Items</h3>
      {items.map((item, index) => (
        <Fragment key={index}>
          <TextControl
            label={`Item ${index + 1} - Title key`}
            value={item.title}
            onChange={(val) => updateItem(index, 'title', val)}
          />
          <TextControl
            label={`Item ${index + 1} - Content key`}
            value={item.content}
            onChange={(val) => updateItem(index, 'content', val)}
          />
          <Button variant="link" onClick={() => removeItem(index)}>
            Remove
          </Button>
          <hr />
        </Fragment>
      ))}

      <Button variant="primary" onClick={addItem}>
        + Add Item
      </Button>
    </div>
  );
}
