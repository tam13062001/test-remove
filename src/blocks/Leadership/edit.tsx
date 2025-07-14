import { useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { TextControl, TextareaControl, Button, CheckboxControl } from '@wordpress/components';

type Item = {
  title: string;
  content: string;
  isList?: boolean;
};

type Props = {
  attributes: {
    title: string;
    heading: string;
    content: string;
    image_url: string;
    items: Item[];
  };
  setAttributes: (attrs: Partial<Props['attributes']>) => void;
};

export default function Edit({ attributes, setAttributes }: Props) {
  const { title, heading, content, image_url, items } = attributes;

  const updateItem = <K extends keyof Item>(index: number, key: K, value: Item[K]) => {
    const newItems = [...items];
    newItems[index][key] = value;
    setAttributes({ items: newItems });
  };

  const addItem = () => {
    setAttributes({
      items: [...items, { title: '', content: '', isList: false }]
    });
  };

  const removeItem = (index: number) => {
    const newItems = [...items];
    newItems.splice(index, 1);
    setAttributes({ items: newItems });
  };

  return (
    <div {...useBlockProps()}>
      <TextControl label="Title" value={title} onChange={(val) => setAttributes({ title: val })} />
      <TextControl label="Heading" value={heading} onChange={(val) => setAttributes({ heading: val })} />
      <TextareaControl label="Content" value={content} onChange={(val) => setAttributes({ content: val })} />
      
      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => setAttributes({ image_url: media.url })}
          allowedTypes={['image']}
          render={({ open }) => (
            <>
              <Button onClick={open} variant="secondary">
                {image_url ? 'Change Image' : 'Select Image'}
              </Button>
              {image_url && <img src={image_url} alt="" style={{ maxWidth: 200, marginTop: 10 }} />}
            </>
          )}
        />
      </MediaUploadCheck>

      <h3>Items</h3>
      {items.map((item, index) => (
        <div key={index} style={{ border: '1px solid #ccc', padding: 10, marginBottom: 10 }}>
          <TextControl
            label={`Item ${index + 1} Title`}
            value={item.title}
            onChange={(val) => updateItem(index, 'title', val)}
          />
          <TextareaControl
            label={`Item ${index + 1} Content`}
            value={item.content}
            onChange={(val) => updateItem(index, 'content', val)}
          />
          <CheckboxControl
            label="Render as List"
            checked={!!item.isList}
            onChange={(val) => updateItem(index, 'isList', val)}
          />
          <Button isDestructive onClick={() => removeItem(index)}>Remove</Button>
        </div>
      ))}
      <Button variant="primary" onClick={addItem}>Add Item</Button>
    </div>
  );
}
