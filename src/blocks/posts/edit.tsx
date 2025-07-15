import { useBlockProps } from '@wordpress/block-editor';
import { CheckboxControl, PanelBody, TextControl } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import { store as coreStore } from '@wordpress/core-data';
import { useState } from '@wordpress/element';

type Props = {
  attributes: {
    title: string;
    categories: string[];
  };
  setAttributes: (attrs: Partial<Props['attributes']>) => void;
};

type Category = {
  id: number;
  name: string;
  slug: string;
};

export default function Edit({ attributes, setAttributes }: Props) {
  const { title, categories } = attributes;

  const allCategories = useSelect(
    (select) =>
      (select(coreStore) as any).getEntityRecords('taxonomy', 'category', { per_page: -1 }) as Category[] | undefined,
    []
  );

  const toggleCategory = (slug: string, checked: boolean) => {
    const updated = checked
      ? [...categories, slug]
      : categories.filter((item) => item !== slug);
    setAttributes({ categories: updated });
  };

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Tiêu đề danh sách bài viết"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />

      <PanelBody title="Chọn category" initialOpen={true}>
        {allCategories ? (
          allCategories.map((cat) => (
            <CheckboxControl
              key={cat.id}
              label={cat.name}
              checked={categories.includes(cat.slug)}
              onChange={(checked) => toggleCategory(cat.slug, checked)}
            />
          ))
        ) : (
          <p>Đang tải danh sách...</p>
        )}
      </PanelBody>
    </div>
  );
}
