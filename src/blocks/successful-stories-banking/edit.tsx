import { __ } from '@wordpress/i18n';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import { TextControl } from '@wordpress/components';

type Props = {
  attributes: {
    title: string;
    title_1: string;
    title_2: string;
  };
  setAttributes: (attrs: Partial<Props['attributes']>) => void;
};

export default function Edit({ attributes, setAttributes }: Props) {
  const { title, title_1, title_2 } = attributes;
  const blockProps = useBlockProps();

  return (
    <div {...blockProps}>
      <TextControl
        label={__('Title', 'datum')}
        value={title}
        onChange={(value) => setAttributes({ title: value })}
      />
      <TextControl
        label={__('Story 1 Title', 'datum')}
        value={title_1}
        onChange={(value) => setAttributes({ title_1: value })}
      />
      <TextControl
        label={__('Story 2 Title', 'datum')}
        value={title_2}
        onChange={(value) => setAttributes({ title_2: value })}
      />
    </div>
  );
}
