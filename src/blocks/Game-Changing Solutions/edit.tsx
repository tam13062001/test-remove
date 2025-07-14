import { useBlockProps } from '@wordpress/block-editor';
import { TextControl, Button } from '@wordpress/components';
import { Fragment } from '@wordpress/element';

export default function Edit({ attributes, setAttributes }) {
  const { title, items } = attributes;

  const updateItem = (index: number, field: string, value: string) => {
    const newItems = [...items];
    newItems[index][field] = value;
    setAttributes({ items: newItems });
  };

  const addItem = () => {
    const newItems = [...items, { title: '', desc: '', link: '' }];
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
        label="Translation key - Section Title"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />

      {items.map((item, index) => (
        <Fragment key={index}>
          <hr />
          <TextControl
            label={`Item ${index + 1} - Title key`}
            value={item.title}
            onChange={(val) => updateItem(index, 'title', val)}
          />
          <TextControl
            label={`Item ${index + 1} - Desc key`}
            value={item.desc}
            onChange={(val) => updateItem(index, 'desc', val)}
          />
          <TextControl
            label={`Item ${index + 1} - Link`}
            value={item.link}
            onChange={(val) => updateItem(index, 'link', val)}
          />
          <Button variant="link" onClick={() => removeItem(index)}>
            Remove Item
          </Button>
        </Fragment>
      ))}

      <Button variant="primary" onClick={addItem}>
        + Add Solution
      </Button>
    </div>
  );
}
