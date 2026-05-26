---
name: Agri-Corporate Premium
colors:
  surface: '#f7faf6'
  surface-dim: '#d8dbd7'
  surface-bright: '#f7faf6'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f1f4f0'
  surface-container: '#ecefeb'
  surface-container-high: '#e6e9e5'
  surface-container-highest: '#e0e3df'
  on-surface: '#181c1a'
  on-surface-variant: '#404847'
  inverse-surface: '#2d312f'
  inverse-on-surface: '#eef2ee'
  outline: '#717977'
  outline-variant: '#c0c8c6'
  surface-tint: '#3b6662'
  primary: '#002624'
  on-primary: '#ffffff'
  primary-container: '#0f3d3a'
  on-primary-container: '#7ca8a3'
  inverse-primary: '#a3cfca'
  secondary: '#4e6700'
  on-secondary: '#ffffff'
  secondary-container: '#bef127'
  on-secondary-container: '#516b00'
  tertiary: '#002720'
  on-tertiary: '#ffffff'
  tertiary-container: '#0b3e35'
  on-tertiary-container: '#7aa99e'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#beebe6'
  primary-fixed-dim: '#a3cfca'
  on-primary-fixed: '#00201e'
  on-primary-fixed-variant: '#234e4a'
  secondary-fixed: '#c0f42b'
  secondary-fixed-dim: '#a6d700'
  on-secondary-fixed: '#151f00'
  on-secondary-fixed-variant: '#3a4d00'
  tertiary-fixed: '#bcece0'
  tertiary-fixed-dim: '#a0d0c4'
  on-tertiary-fixed: '#00201b'
  on-tertiary-fixed-variant: '#204e45'
  background: '#f7faf6'
  on-background: '#181c1a'
  surface-variant: '#e0e3df'
  leaf-pale: '#C8F8A9'
  surface-white: '#FFFFFF'
  text-dark: '#0F3D3A'
  border-subtle: '#E2E8E1'
typography:
  display-lg:
    fontFamily: Work Sans
    fontSize: 64px
    fontWeight: '600'
    lineHeight: 72px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Work Sans
    fontSize: 48px
    fontWeight: '600'
    lineHeight: 56px
    letterSpacing: -0.01em
  headline-lg-mobile:
    fontFamily: Work Sans
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
  headline-md:
    fontFamily: Work Sans
    fontSize: 32px
    fontWeight: '500'
    lineHeight: 40px
  body-lg:
    fontFamily: DM Sans
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: DM Sans
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-md:
    fontFamily: DM Sans
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 20px
    letterSpacing: 0.05em
  stat-lg:
    fontFamily: Work Sans
    fontSize: 56px
    fontWeight: '700'
    lineHeight: '1'
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  base: 8px
  container-max: 1280px
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: 64px
  section-gap: 120px
---

## Brand & Style
This design system establishes a high-trust, premium B2B environment for global agricultural exports. It fuses the structured, institutional reliability of traditional corporate consulting with the vibrant, forward-thinking energy of modern fintech.

The visual direction is **Corporate / Modern** with a strong emphasis on **Minimalism** and high-quality photography. The interface must evoke a sense of "Earth-rooted precision"—balancing the organic nature of agriculture with the rigorous standards of global logistics and finance. Expect heavy use of whitespace, refined typography, and purposeful data visualization to communicate transparency and traceability.

## Colors
The palette is built on a foundation of "Forest and Field." The primary **Deep Forest Green** (#0F3D3A) provides the authoritative corporate anchor, used for headers, primary buttons, and critical text. The secondary **Fresh Leaf Green** (#B4E717) acts as a high-visibility accent for call-to-actions, status indicators, and highlights, representing growth and modern technology.

Neutral tones utilize a "Clean Canvas" approach, favoring a very light grey-green wash (#F2F5F1) over pure white to soften the professional feel and maintain a high-end editorial look. Text should primarily use the darkest green shade rather than pure black to maintain brand harmony.

## Typography
The typography system prioritizes clarity and authority. **Work Sans** is used for all headings and display text; its slightly wider proportions and geometric construction feel modern and trustworthy. Bold weights should be used for large titles to create a strong visual hierarchy.

**DM Sans** is the workhorse for body copy and UI labels. Its low-contrast, humanist characteristics ensure high legibility in data-dense tables and long-form export documentation. For premium editorial moments, use the `label-md` style with increased letter-spacing to categorize content sections.

## Layout & Spacing
The system utilizes a **Fixed Grid** model for desktop to ensure a controlled, premium reading experience, centered within the viewport. 

- **Desktop (1440px+):** 12-column grid, 1280px max-width, 24px gutters.
- **Tablet (768px - 1024px):** 8-column grid, fluid width with 32px side margins.
- **Mobile (<768px):** 4-column grid, fluid width with 16px side margins.

Spacing follows a strict 8px linear scale. Section vertical padding should be generous (`section-gap`) to allow the "Minimalist" brand style to breathe, preventing the UI from feeling cluttered or "cheap."

## Elevation & Depth
Depth is communicated through **Tonal Layers** and **Low-contrast outlines** rather than heavy shadows. This maintains a "flat-modern" corporate aesthetic.

- **Level 0 (Base):** Background color #F2F5F1.
- **Level 1 (Cards/Surface):** Pure White (#FFFFFF) with a subtle 1px border (#E2E8E1).
- **Level 2 (Interactive):** Use very soft, diffused ambient shadows (0px 4px 20px rgba(15, 61, 58, 0.05)) for hovering over cards or floating navigation bars.
- **Overlays:** Use a semi-transparent Deep Forest Green backdrop (opacity 40%) for modals to keep the focus sharp on the foreground content.

## Shapes
The shape language is **Soft** and structured. A 0.25rem (4px) base radius is applied to buttons, input fields, and small UI components to convey precision. 

Larger containers like cards or image frames may use `rounded-lg` (8px) to feel more approachable. Avoid pill-shapes for primary buttons to maintain a "B2B/Institutional" feel; reserve pill-shapes exclusively for status tags or "chips" to differentiate them from actionable buttons.

## Components

### Buttons
- **Primary:** Deep Forest Green background, White text. Sharp or 4px corners. High-contrast and authoritative.
- **Secondary:** Fresh Leaf Green background, Deep Forest Green text. Used for "Success" actions or "Contact" triggers.
- **Ghost:** Transparent background with 1px Deep Forest Green border.

### Cards
Cards must use white backgrounds with subtle borders. Use "Expert Advice" styles: a large icon or image at the top, followed by a bold Work Sans headline and concise DM Sans body text.

### Input Fields
Strict, rectangular fields with a 1px border. Focus states should use a 2px Fresh Leaf Green bottom border or glow to signal "active/modern."

### Data Visualization
Charts should utilize the "Green Spectrum"—shading from Deep Forest to Fresh Leaf. This reinforces the agricultural theme while maintaining professional data standards.

### Chips & Tags
Used for traceability status (e.g., "Certified," "In Transit"). These should be pill-shaped with light tints of the brand colors (e.g., Pale Leaf background with Deep Green text).