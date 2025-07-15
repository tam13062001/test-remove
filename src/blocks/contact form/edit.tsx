import { MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { TextControl, Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }: any) {
  const { title, cta_link, cta_text, image_url } = attributes;

  return (
    <div className="space-y-6 p-4">
      <TextControl
        label="Title"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />
      <TextControl
        label="CTA Link"
        value={cta_link}
        onChange={(val) => setAttributes({ cta_link: val })}
      />
      <TextControl
        label="CTA Text"
        value={cta_text}
        onChange={(val) => setAttributes({ cta_text: val })}
      />
      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => setAttributes({ image_url: media.url })}
          allowedTypes={['image']}
          render={({ open }) => (
            <Button onClick={open} isSecondary>
              {image_url ? 'Đổi ảnh' : 'Chọn ảnh'}
            </Button>
          )}
        />
      </MediaUploadCheck>
      {image_url && <img src={image_url} style={{ maxWidth: '100%' }} alt="Preview" />}
    </div>
  );
}