import { MediaUpload, MediaUploadCheck, useBlockProps } from "@wordpress/block-editor";
import { TextControl, Button } from "@wordpress/components";

export default function Edit({ attributes, setAttributes }) {
  const { title, heading, content, cta_text, cta_link, image_url } = attributes;

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Title"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />
      <TextControl
        label="Heading secondary"
        value={heading}
        onChange={(val) => setAttributes({ heading: val })}
      />
      <TextControl
        label="Content"
        value={content}
        onChange={(val) => setAttributes({ content: val })}
      />
      <TextControl
        label="Button CTA - Text"
        value={cta_text}
        onChange={(val) => setAttributes({ cta_text: val })}
      />
      <TextControl
        label="Button CTA - Link"
        value={cta_link}
        onChange={(val) => setAttributes({ cta_link: val })}
      />
      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => setAttributes({ image_url: media.url })}
          allowedTypes={["image"]}
          render={({ open }) => (
            <Button onClick={open} variant="secondary">
              {image_url ? "Đổi ảnh" : "Tải ảnh lên"}
            </Button>
          )}
        />
      </MediaUploadCheck>
      {image_url && (
        <img src={image_url} alt="Preview" style={{ maxWidth: "100%", marginTop: "10px" }} />
      )}
    </div>
  );
}
