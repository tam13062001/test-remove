import { useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { TextControl, Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  const { title, tag, headline, day, month, year, image_url } = attributes;

  return (
    <div {...useBlockProps()}>
      <TextControl label="Section Title" value={title} onChange={(val) => setAttributes({ title: val })} />
      <TextControl label="Event Tag" value={tag} onChange={(val) => setAttributes({ tag: val })} />
      <TextControl label="Event Headline" value={headline} onChange={(val) => setAttributes({ headline: val })} />
      <TextControl label="Day" value={day} onChange={(val) => setAttributes({ day: val })} />
      <TextControl label="Month" value={month} onChange={(val) => setAttributes({ month: val })} />
      <TextControl label="Year" value={year} onChange={(val) => setAttributes({ year: val })} />

      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => setAttributes({ image_url: media.url })}
          allowedTypes={['image']}
          render={({ open }) => (
            <Button onClick={open} variant="secondary">
              {image_url ? 'Change Image' : 'Upload Image'}
            </Button>
          )}
        />
      </MediaUploadCheck>

      {image_url && <img src={image_url} style={{ marginTop: 16, maxWidth: '100%' }} />}
    </div>
  );
}
