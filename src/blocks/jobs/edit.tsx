import { MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { TextControl, Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }: any) {
  const { title, backgroundImage } = attributes;

  return (
    <div className="p-4 bg-white border">
      <TextControl
        label="Tiêu đề"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />

      <div className="mt-4">
        <strong>Ảnh nền:</strong>
        <MediaUploadCheck>
          <MediaUpload
            onSelect={(media) => setAttributes({ backgroundImage: media.url.replace(window.location.origin, '') })}
            allowedTypes={['image']}
            render={({ open }) => (
              <Button onClick={open} isSecondary>
                {backgroundImage ? 'Thay ảnh' : 'Chọn ảnh'}
              </Button>
            )}
          />
        </MediaUploadCheck>
        {backgroundImage && (
          <img
            src={backgroundImage}
            alt="Ảnh nền"
            style={{ width: '100%', marginTop: 10, maxWidth: 400 }}
          />
        )}
      </div>
    </div>
  );
}
