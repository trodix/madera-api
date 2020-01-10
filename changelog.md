# Changelog

## [0.4.4] - 2020-01-10
### Added
- Un module ne peut avoir maintenant qu'une seule quotation (ManyToOne)
- Ajout de l'entité TemplateModule
- Ajout de l'entité TemplateModuleComponent

## [0.4.3] - 2020-01-09
### Added
- Component a maintenant: module, project, module_components dans serialization groups
- Module a maintenant: project, module_components dans serialization groups
- ModueComponent a maintenant: project dans serialization groups
- Un projet récupére maintenant la liste des modules détaillé dans chacunes de ses quotations + la moduleRange dans chaque module
- Une quotation récupére maintenant le detail de ses modules et le module  l'uri des module_components
- Un module récupére maintenant le detail de son module_component avec le component et l'uri des component_specifications
