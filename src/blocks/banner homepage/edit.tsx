import { MediaUpload, useBlockProps } from '@wordpress/block-editor';
import { TextControl, Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  const { line1, line2, line3, backgroundImage } = attributes;
  const blockProps = useBlockProps();

  return (
    <div {...blockProps}>
      <TextControl label="Line 1" value={line1} onChange={(val) => setAttributes({ line1: val })} />
      <TextControl label="Line 2" value={line2} onChange={(val) => setAttributes({ line2: val })} />
      <TextControl label="Line 3" value={line3} onChange={(val) => setAttributes({ line3: val })} />
      <MediaUpload
        onSelect={(media) => setAttributes({ backgroundImage: media.url })}
        allowedTypes={['image']}
        render={({ open }) => (
          <Button onClick={open} variant="secondary">
            Chọn ảnh nền
          </Button>
        )}
      />
    </div>
  );
}
