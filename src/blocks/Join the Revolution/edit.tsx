import { useBlockProps } from '@wordpress/block-editor';
import { TextControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  const { title, description, cta_link, cta_text } = attributes;
  const blockProps = useBlockProps();

  return (
    <div {...blockProps}>
      <TextControl
        label="Translation Key - Title"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />
      <TextControl
        label="Translation Key - Description"
        value={description}
        onChange={(val) => setAttributes({ description: val })}
      />
      <TextControl
        label="CTA Link"
        value={cta_link}
        onChange={(val) => setAttributes({ cta_link: val })}
      />
      <TextControl
        label="Translation Key - CTA Text"
        value={cta_text}
        onChange={(val) => setAttributes({ cta_text: val })}
      />
    </div>
  );
}
