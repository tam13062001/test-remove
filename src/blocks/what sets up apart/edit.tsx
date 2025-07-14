import {
  MediaUpload,
  MediaUploadCheck,
  useBlockProps
} from '@wordpress/block-editor';

import {
  Button,
  TextControl,
  TextareaControl,
  SelectControl
} from '@wordpress/components';

import { useState } from '@wordpress/element';


export default function Edit({ attributes, setAttributes }) {
  const { items = [] } = attributes;

  const updateItem = (index: number, key: string, value: any) => {
    const newItems = [...items];
    newItems[index][key] = value;
    setAttributes({ items: newItems });
  };

  const addItem = () => {
    setAttributes({
      items: [
        ...items,
        { title: '', content: '', media_url: '', media_type: 'video' }
      ]
    });
  };

  const removeItem = (index: number) => {
    const newItems = [...items];
    newItems.splice(index, 1);
    setAttributes({ items: newItems });
  };

  return (
    <div {...useBlockProps()}>
      <h3>Cards</h3>
      {items.map((item, index) => (
        <div key={index} style={{ border: '1px solid #ccc', padding: '16px', marginBottom: '16px' }}>
          <TextControl
            label="Translation key - Title"
            value={item.title}
            onChange={(value) => updateItem(index, 'title', value)}
          />
          <TextControl
            label="Translation key - Content"
            value={item.content}
            onChange={(value) => updateItem(index, 'content', value)}
          />
          <SelectControl
            label="Media Type"
            value={item.media_type}
            options={[
              { label: 'Video', value: 'video' },
              { label: 'Image', value: 'image' },
            ]}
            onChange={(value) => updateItem(index, 'media_type', value)}
          />
          <MediaUploadCheck>
            <MediaUpload
              onSelect={(media) => updateItem(index, 'media_url', media.url)}
              allowedTypes={['image', 'video']}
              render={({ open }) => (
                <Button onClick={open} variant="secondary">
                  {item.media_url ? 'Change Media' : 'Upload Media'}
                </Button>
              )}
            />
          </MediaUploadCheck>
          {item.media_url && <p><strong>Media:</strong> {item.media_url}</p>}
          <Button isDestructive onClick={() => removeItem(index)}>Remove</Button>
        </div>
      ))}
      <Button variant="primary" onClick={addItem}>Add Card</Button>
    </div>
  );
}
