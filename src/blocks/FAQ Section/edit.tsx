import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { TextControl, TextareaControl, Button } from '@wordpress/components';
import { Fragment } from '@wordpress/element';

type FaqItem = {
  title: string;
  content: string;
};

type Props = {
  attributes: {
    items: FaqItem[];
    text_title: string;
  };
  setAttributes: (attrs: Partial<Props['attributes']>) => void;
};

export default function Edit({ attributes, setAttributes }: Props) {
  const { items, text_title } = attributes;

  const updateItem = (index: number, field: 'title' | 'content', value: string) => {
    const newItems = [...items];
    newItems[index][field] = value;
    setAttributes({ items: newItems });
  };

  const addItem = () => {
    setAttributes({
      items: [...items, { title: '', content: '' }]
    });
  };

  const removeItem = (index: number) => {
    const newItems = [...items];
    newItems.splice(index, 1);
    setAttributes({ items: newItems });
  };

  return (
    <div {...useBlockProps()}>
      <h2>{__('Frequently Asked Questions', 'datum')}</h2>

      {items.map((item, index) => (
        <Fragment key={index}>
          <TextControl
            label={`Question ${index + 1}`}
            value={item.title}
            onChange={(value) => updateItem(index, 'title', value)}
          />
          <TextareaControl
            label={`Answer ${index + 1}`}
            value={item.content}
            onChange={(value) => updateItem(index, 'content', value)}
          />
          <Button
            isDestructive
            onClick={() => removeItem(index)}
            style={{ marginBottom: '1rem' }}
          >
            Remove
          </Button>
        </Fragment>
      ))}

      <Button variant="primary" onClick={addItem}>
        {__('Add Question', 'datum')}
      </Button>

      <TextControl
        label="Text title for CTA"
        value={text_title}
        onChange={(value) => setAttributes({ text_title: value })}
        style={{ marginTop: '2rem' }}
      />
    </div>
  );
}
