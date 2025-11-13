# XSL Core

Cette bibliothèque offre une interface simple et lisible pour générer et valider vos documents XSL-FO facilement.

Exemple de code :
```php
<?php

$foNamespace = new XmlNamespace('fo', 'http://www.w3.org/1999/XSL/Format');

$generatedDocument = new XmlDocument();
$generatedDocument->setGlobalNamespace($foNamespace);
$root = (new Root())
    ->namespace($foNamespace)
    ->child((new LayoutMasterSet())
        ->child((new SimplePageMaster())
            ->attributes([
                new Attribute('master-name', 'simple'),
                new Attribute('page-height', '29.7cm'),
                new Attribute('page-width', '21cm'),
                new Attribute('margin', '2cm'),
            ])
            ->child(new RegionBody())))
    ->child((new PageSequence())
        ->attribute(new Attribute('master-reference', 'simple'))
        ->child((new Flow())
            ->attribute(new Attribute('flow-name', 'xsl-region-body'))
            ->child((new Block())
                ->attributes([
                    new Attribute('font-size', '12pt'),
                    new Attribute('line-height', '14pt'),
                ])
                ->content('XSL-FO (Extensible Stylesheet Language Formatting Objects) est un langage XML utilisé pour décrire la mise en page de documents imprimés.')
            )
            ->child((new Block())
                ->content('Il est couramment utilisé avec XSLT pour transformer des données XML en fichiers imprimables via des outils comme Apache FOP.')
            )
            ->child((new Block())
                ->child((new BasicLink())
                    ->attribute(new Attribute('external-destination', "url('http://exemple.com/xsl-fo-docs')"))
                    ->content('Documentation XSL-FO')
                )
            )
        )
    );
```

## Fonctionnalités

Cette bibliothèque suit la spécification XSL-FO 1.1 : [https://www.w3.org/TR/xsl11/](https://www.w3.org/TR/xsl11/).  

Elle prend en charge :
- Les différentes balises XSL-FO (`fo:block`, `fo:instream-foreign-object`, ...)
- Les différentes propriétés possibles pour chaque balise
- Les différentes valeurs possibles pour chaque propriété
- L'utilisation d'expressions comme `floor(1.25)` : [https://www.w3.org/TR/xsl11/#d0e5032](https://www.w3.org/TR/xsl11/#d0e5032)
- L'appel aux fonctions XSL-FO, appelée Core Function Library : [https://www.w3.org/TR/xsl11/#d0e5857](https://www.w3.org/TR/xsl11/#d0e5857)
- Les références de propriétés héritées

Pour chaque structure, il est possible d'utiliser la méthode `validate` pour vérifier si la structure générée est correcte.

## Pourquoi utiliser XSL Core ?

La spécification XSL-FO et ses implémentations offrent de nombreux avantages, à l'ère où les PDFs sont générés par un moteur de rendu web :
- XSL-FO gère correctement les marque-pages
- XSL-FO supporte nativement les contrôles associés aux formulaires
- XSL-FO intègre l'accessibilité numérique, facilitant la génération de documents PDF accessibles
- XSL-FO ne nécessite pas l'installation d'un moteur de rendu d'un navigateur comme Pupetteer

Au-delà de ces avantages, ce package :
- Est plutôt bien testé, avec ses 7500 fichiers de tests (et le compte augmente !)
- Est orienté performance, pour conserver les gains de XSL-FO par rapport aux rendus par navigateur
- Respecte les conventions de code actuelles et est totalement documenté
- Est pensé pour fonctionner avec PHP8.0 🚀

## Générer des documents PDF avec XSL Core

XSL Core n'est pas une **implémentation**, c'est à dire qu'elle ne crée pas de documents PDF avec XSL-FO. Il s'agit d'une bibliothèque pour **valider** et **simplifier** la création de documents.  

Pour générer un document, il faudra utiliser une des implémentations disponibles :
- Apache FOP (open source, gratuit) : [https://xmlgraphics.apache.org/fop/](https://xmlgraphics.apache.org/fop/)
- AntennaHouse (propriétaire, payant) : [https://www.antennahouse.com/](https://www.antennahouse.com/)
- RenderX (propriétaire, payant) : [https://www.renderx.com/](https://www.renderx.com/)

### Exemple avec Apache FOP

Télécharger Apache FOP : [https://xmlgraphics.apache.org/fop/download.html](https://xmlgraphics.apache.org/fop/download.html) ou `apt install fop` (dépendant de votre distribution)

Générer un document avec XSL Core :
```php
<?php

use Lsa\Xml\Utils\Xml\XmlDocument;
use Lsa\Xml\Utils\Xml\XmlNamespace;
use Lsa\Xsl\Core\Tags\Layout\Root;

require_once __DIR__.'/../vendor/autoload.php';
$foNamespace = new XmlNamespace('fo', 'http://www.w3.org/1999/XSL/Format');

$generatedDocument = new XmlDocument();
$generatedDocument->setGlobalNamespace($foNamespace);
// Créer la structure
$root = (new Root())
    ->namespace($foNamespace);

// Ecrire dans un fichier
file_put_contents('mon-document.fo', $root->asXml());

// Ou autre système d'appel à Apache FOP
shell_exec('fop mon-document.fo mon-pdf.pdf');
```

## Installation

Ce package sera (bientôt) disponible sur Composer. Pour l'installer :
```sh
composer require ls-a/xsl-core
```

## Journal des modifications

Veuillez consulter le fichier [CHANGELOG](CHANGELOG.md) pour voir les dernières modifications.

## Support

Nous mettons du coeur à l'ouvrage pour proposer des produits de qualité et accessibles à toutes et tous. Si vous aimez notre travail, n'hésitez pas à faire appel à nous pour votre prochain projet !  

## Contributions

Les contributions sont régies par le fichier [CONTRIBUTING](https://github.com/ls-a-fr/.github/CONTRIBUTING.md).

## Sécurité

Si vous avez déniché un bug ou une faille, merci de nous contacter par mail à [mailto:contact@ls-a.fr](contact@ls-a.fr) en lieu et place d'une issue, pour respecter la sécurité des autres usagers.


## Crédits

- Renaud Berthier

## Licence

Code déposé sous licence MIT. Rendez-vous sur le fichier LICENSE pour davantage d'informations.