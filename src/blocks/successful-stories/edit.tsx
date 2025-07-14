import { useBlockProps, MediaUpload } from '@wordpress/block-editor';
import { Button, TextControl, PanelBody } from '@wordpress/components';
import { Fragment } from '@wordpress/element';

export default function Edit({ attributes, setAttributes }) {
  const { title, slides = [] } = attributes;
  const blockProps = useBlockProps();

  const updateSlide = (index: number, key: string, value: any) => {
    const newSlides = [...slides];
    newSlides[index][key] = value;
    setAttributes({ slides: newSlides });
  };

  const addSlide = () => {
    const newSlides = [...slides, {
      image_url: '',
      title: '',
      description: '',
      link: '',
      link_text: ''
    }];
    setAttributes({ slides: newSlides });
  };

  const removeSlide = (index: number) => {
    const newSlides = slides.filter((_, i) => i !== index);
    setAttributes({ slides: newSlides });
  };

  return (
    <div {...blockProps}>
      <TextControl
        label="Translation key for section title"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />

      {slides.map((slide, index) => (
        <div
          key={index}
          style={{
            border: '1px solid #ddd',
            padding: '1rem',
            marginBottom: '1rem',
            background: '#fafafa'
          }}
        >
          <strong>Slide {index + 1}</strong>

          <MediaUpload
            onSelect={(media) => updateSlide(index, 'image_url', media.url)}
            allowedTypes={['image']}
            render={({ open }) => (
              <>
                {slide.image_url && (
                  <img src={slide.image_url} alt="" style={{ width: '120px', marginTop: '10px' }} />
                )}
                <Button onClick={open} variant="secondary" style={{ marginTop: '10px' }}>
                  Chọn ảnh
                </Button>
              </>
            )}
          />

          <TextControl
            label="Translation key - Title"
            value={slide.title}
            onChange={(val) => updateSlide(index, 'title', val)}
          />

          <TextControl
            label="Translation key - Description"
            value={slide.description}
            onChange={(val) => updateSlide(index, 'description', val)}
          />

          <TextControl
            label="Link"
            value={slide.link}
            onChange={(val) => updateSlide(index, 'link', val)}
          />

          <TextControl
            label="Translation key - CTA text"
            value={slide.link_text}
            onChange={(val) => updateSlide(index, 'link_text', val)}
          />

          <Button
            isDestructive
            onClick={() => removeSlide(index)}
            style={{ marginTop: '10px' }}
          >
            Xoá Slide
          </Button>
        </div>
      ))}

      <Button variant="primary" onClick={addSlide}>
        Thêm Slide
      </Button>
    </div>
  );
}
