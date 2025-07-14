import { useBlockProps } from '@wordpress/block-editor';
import { TextControl, TextareaControl, Button, CheckboxControl } from '@wordpress/components';

type Item = {
  title: string;
  description: string;
  isList?: boolean;
};

type Props = {
  attributes: {
    title: string;
    items: Item[];
  };
  setAttributes: (attrs: Partial<Props['attributes']>) => void;
};

export default function Edit({ attributes, setAttributes }: Props) {
  const { title, items } = attributes;

  const updateItem = (index: number, key: keyof Item, value: any) => {
    const newItems = [...items];
    newItems[index] = {
      ...newItems[index],
      [key]: value,
    };
    setAttributes({ items: newItems });
  };

  const addItem = () => {
    const newItem: Item = {
      title: '',
      description: '',
      isList: false,
    };
    setAttributes({ items: [...items, newItem] });
  };

  const removeItem = (index: number) => {
    const newItems = [...items];
    newItems.splice(index, 1);
    setAttributes({ items: newItems });
  };

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Section Title"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />

      {items.map((item, index) => (
        <div key={index} style={{ marginBottom: '20px', padding: '10px', border: '1px solid #ccc' }}>
          <TextControl
            label="Item Title"
            value={item.title}
            onChange={(val) => updateItem(index, 'title', val)}
          />
          <TextareaControl
            label={item.isList ? 'Description (List - one item per line)' : 'Description'}
            value={item.description}
            onChange={(val) => updateItem(index, 'description', val)}
          />
          <CheckboxControl
            label="Render as List"
            checked={!!item.isList}
            onChange={(val) => updateItem(index, 'isList', val)}
          />
          <Button isDestructive onClick={() => removeItem(index)} style={{ marginTop: '10px' }}>
            Remove
          </Button>
        </div>
      ))}

      <Button variant="primary" onClick={addItem}>
        Add Solution Item
      </Button>
    </div>
  );
}
