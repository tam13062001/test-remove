import { useBlockProps } from '@wordpress/block-editor';
import { TextControl, TextareaControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  const { intro, description } = attributes;

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Title"
        value={intro}
        onChange={(val) => setAttributes({ intro: val })}
      />
      <TextareaControl
        label="Content"
        value={description}
        onChange={(val) => setAttributes({ description: val })}
      />
    </div>
  );
}
