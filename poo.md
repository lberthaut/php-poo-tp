name: inverse
class: center, middle, inverse
# Programmation Orientée Objet
# .red[PHP]
![Right-aligned image](https://ri7.fr/wp-content/uploads/2020/12/logo2-h-195x64-light.png)

---

class: middle
.left-column[
## Objectif
]
.right-column[
- Découvrir un peu plus PHP

- Maitriser les bases de la POO

- Vous permettre de repondre aux besoin de votre entreprise

- Gagner en confiance et motivation
]

---
class: middle
.left-column[
## Objectif
## Requis

]
.right-column[
- Version **PHP >=7.4** (avec laragon, lamp, wamp, ...)

- Avoir les base de PHP (variable, if, for, while, ...)

- Éditeur de texte (vs-code, phpstorm, sublime-text, ...)

- Shell terminal / Powershell avec le client `php-cli`  
]

---

class: middle
.left-column[
## Objectif
## Requis
## Pourquoi la POO ?
]
.right-column[
La programmation orientée objet (POO) est devenue **l'un des éléments constitutifs de la programmation**, qui remplace ou améliore la programmation procédurale. Alors que l'idée plus traditionnelle de la programmation procédurale place l'action et la logique au centre, **la POO utilise des objets et des données pour produire des résultats.**

Au niveau le plus simple, la POO se concentre sur les objets qu'un programmeur souhaite modifier plutôt que sur les actions nécessaires pour effectuer ce changement. Cela **facilite l'exécution d'analyses de code** par les programmeurs et ces objets sont **réutilisables dans d'autres projets.**

La majorité des langages de programmation modernes tels que C++, Object Pascal, Java, Python et PHP combinent à la fois la programmation orientée objet et la programmation procédurale, ce qui signifie que la programmation orientée objet est devenue une évolution très importante dans le monde de la programmation.
]

---

class: middle
.left-column[
## Objectif
## Requis
## Pourquoi la POO ?
## Au programme
]

.right-column[
- **Organisation du code**
  - Les classes
  - Propriétés (attributs) d'une classe
  - Méthodes d'une classe

* **L'encapsulation, Sécurité du code (intégrité)**
  - Visibilité Private
  - Accesseurs & Mutateurs

- **Réutilisation du code et gain de temps**
  - Héritage
  - Mot clé final
  - Trait

* **Plus de contrôle sur votre développement**
  - Abstraction & interfaces
  - Polymorphisme
  - Namespace
  - Exceptions
  - Autoloader
* **Bonus** (Composer, PHP8, ...)
  ]

---

class: middle

### Analysons un cas

La société R souhaite un programme afin d'organiser son personnel, elle fait appel à un développeur qui écrit le code suivant :

.pull-left[

```php
$nom1 = 'Hamada';
$prenom1 = 'Fahari';
$age1 = 35;
$anciennete1 = 12;

$nom2 = 'Dupont';
$prenom2 = 'Michel';
$age2 = 50;
$anciennete2 = 20;

function presentation($nom, $prenom, $age, $anciennete)
{
  echo "Mon nom est $nom, mon prenom est $prenom,
    j'ai $age ans
    je travail depuis $anciennete ans.\n\r";
}

presentation($nom1, $prenom1, $age1, $anciennete1);
presentation($nom2, $prenom2, $age2, $anciennete2);
```

]
.pull-right[
]
---

class: middle

### Analysons un cas

La société R souhaite un programme afin d'organiser son personnel, elle fait appel à un développeur qui écrit le code suivant :

.pull-left[

```php
$nom1 = 'Hamada';
$prenom1 = 'Fahari';
$age1 = 35;
$anciennete1 = 12;

$nom2 = 'Dupont';
$prenom2 = 'Michel';
$age2 = 50;
$anciennete2 = 20;

function presentation($nom, $prenom, $age, $anciennete)
{
  echo "Mon nom est $nom, mon prenom est $prenom,
    j'ai $age ans
    je travail depuis $anciennete ans.\n\r";
}

presentation($nom1, $prenom1, $age1, $anciennete1);
presentation($nom2, $prenom2, $age2, $anciennete2);
```

]
.pull-right[
On remarque qu'avec le code presenté :

- Nous avons **beaucoup de variables** pour représenter les données d'un employé.

- Une gestion de **nouveaux employés qui se complique.**

- Il est aussi possible que nous puissions** mélanger les variables.**

- Au final, **un code surchargé et difficile à maintenir**
]

---

class: middle, center, inverse

# 1. Organisation du code

---

class: middle
.left-column[
### Les classes
]
.right-column[
**Une classe est une définition ou une représentation de quelque chose**. La classe va contenir des propriétés qu’on pourra manipuler ainsi que des méthodes.

- **Les propriétés (attributs),** ce sont des variables internes à cette définition dans lesquelles on stocke des valeurs.

- **Une classe a aussi des méthodes,** il s’agit de fonctions internes à la classe. Les methode represente le comportement qu'aura notre définition.

Ainsi **La classe détermine ce qu'il sera possible de faire** avec ce qu'elle représente. 

Elle va donc nous permettre de structurer et d'organiser l’ensemble de notre code pour le rendre plus solide et facile à entretenir ou à faire évoluer.
]

---

class: middle
.left-column[
### Les classes
#### Déclaration de la classe
]
.right-column[
Une classe se déclare de la manière suivante :

```php
class Voiture
{

}
```

**Note : **Le mot clé `class` est suivi d'un nom en **`PascalCase`**, Prenez soin de nommer votre classe de manière pertinente.
]

---

class: middle
.left-column[
### Les classes
#### Déclaration de la classe
#### Instanciation d'une classe
]
.right-column[
Une classe se déclare de la manière suivante :

```php
class Voiture
{

}
```

**Note : **Le mot clé `class` est suivi d'un nom en **`PascalCase`**, Prenez soin de nommer votre classe de manière pertinente.

Créer une instance, c'est créer un objet à partir d'une classe. On utilise le mot `new` pour instancier une classe. Cette instanciation sera alors affecter à une variable qui deviendra donc notre objet de type `Voiture`. 

**Exemple d’instanciation:**

```php
  $voiture = new Voiture();

  var_dump($voiture);
```

A savoir qu'au moment de l'instanciation une réference d'objet est mise en place par PHP.
]
---

class: middle
.left-column[
### Les classes
#### Déclaration de la classe
#### Instanciation d'une classe
#### Référence d'objet
]

.right-column[
Une **« référence »** en PHP ou plus précisément un **alias** est un moyen d’accéder au contenu d’une même variable en utilisant un autre nom. Pour le dire simplement, créer un alias signifie déclarer un autre nom de variable qui va partager la même valeur que la variable de départ.

Notez qu’en PHP le nom d’une variable et son contenu ou sa valeur sont identifiés comme deux choses distinctes par le langage. Cela permet donc de donner plusieurs noms à un même contenu.

Ainsi, lorsque l’on modifie la valeur de l’alias, on modifie également la valeur de la variable de base puisque ces deux éléments partagent la même valeur.

.pull-left[
**Déclaration par référence avec `&`**

```php
  function foo(&$var)
  {
      $var = 2;
  }

  $a = 1;
  foo($a);
  // $a vaut 2 maintenant
  var_dump($a);
```

]
.pull-right[
**Déclaration par reference avec l'instanciation**

```php
  $date1 = new DateTime();
  $date2 = $date1;
  $date3 = clone $date1;
  $date2->modify('+1 day');

  var_dump($date1, $date2, $date3);
```

`$date1` et `$date2` désignent le même objet en mémoire. Ils sont donc tous les deux au lendemain.
]
]
---

class: middle
.left-column[
### Les classes
#### Déclaration de la classe
#### Instanciation d'une classe
#### Référence d'objet
### Propriétés (attributs) d'une classe
]

.right-column[
Les propriétés sont les variables membres de la classe. Ils constituent les caractéristiques de l'objet. En quelque sorte ce qui l'a défini.

```php
class Voiture
{
  $vitesse = 100;
  $carburant = 'diesel';
}
```
]

---

class: middle
.left-column[
### Les classes
#### Déclaration de la classe
#### Instanciation d'une classe
#### Référence d'objet
### Propriétés (attributs) d'une classe
]

.right-column[
Les propriétés sont les variables membres de la classe. Ils constituent les caractéristiques de l'objet. En quelque sorte ce qui l'a défini.

```php
class Voiture
{
  $vitesse = 100;
  $carburant = 'diesel';
}
```

Pour déclarer un attribut il faut le précéder par sa **visibilité**. **La visibilité** d'un attribut indique à partir d'où on peut y avoir accès.
**`public`** est un type de visibilité qui permet à l'attribut d'être accessible de partout (de l'intérieur de la classe dont il est membre comme de l'extérieur).

```php
class Voiture
{
  public $vitesse = 100;
  public $carburant = 'diesel';
}

$voiture = new Voiture();
$voiture->vitesse = 120;
$voiture->carburant = 'ethanol';
var_dump($voiture);
```

On utilise l’opérateur `->` pour avoir accès **aux propriétés et méthodes** de l'objets instancié.
]
---

class: middle
.left-column[
### Les classes
#### Déclaration de la classe
#### Instanciation d'une classe
#### Référence d'objet
### Propriétés (attributs) d'une classe
### Méthodes d'une classe
]
.right-column[
Nous allons également pouvoir déclarer des fonctions à l’intérieur de nos classes. Les fonctions définies à l’intérieur d’une classe sont appelées des **méthodes**. Les méthodes de classes vont donc être ce qui défini le comportement de notre objet.

```php
class Voiture
{
  public $vitesse = 100;
  public $carburant = 'diesel';

  public function rouler()
  {
    echo 'Voiture '.$this->carburant.', roulant à '.$this->vitesse.' KM/h';
  }
}

$voiture  = new Voiture();
$voiture->rouler();
```

Vous remarquez que pour utiliser les propriété de la classe nous utilise le mot clé `$this`. La pseudo-variable `$this` est disponible lorsqu'une méthode est appelée depuis un contexte objet. `$this` est la valeur de l'objet appelant.

**Note :** Par défaut la méthode à une visibilité `public`, on pourrait donc ne pas le mentionner mais par convention il est mieux de le définir.
]
---

class:middle
.left-column[
### Les classes
#### Déclaration de la classe
#### Instanciation d'une classe
#### Référence d'objet
### Propriétés (attributs) d'une classe
### Méthodes d'une classe
### .red[**Travaux Pratique**]
]

.right-column[

- Faire un nouveau répertoire de travail `php-poo` et y accéder

- Faire un nouveau ficher `index.php` avec à l'intérieur `<?php`

- Lancer notre serveur PHP avec `php -S localhost:8000`

- Réorganiser le code de la société R en utilisant la POO

  - Définir la classe `Employe` et ses propriétés

  - Faite en sorte que l'employé puisse se présenter avec une méthode `presentation()`

  - Ajouter 3 instances d'employés qui se presenteront chacun
]

---

class: middle, center, inverse

# 2. L'encapsulation

---

class:middle
.left-column[
### Visibilité private
]
.right-column[
Nous avons définit les attributs avec un visibilité `public` et peuvent être modifié par n'importe qui à un autre instant dans le code.

Pour remédier à cela on va utiliser le concept **d'encapsulation** afin de protéger certaines données des interférences extérieures en se forçant à utiliser les méthodes définies pour manipuler les données. L’encapsulation va ici être très intéressante pour empêcher que certaines propriétés ne soient manipulées depuis l’extérieur de la classe.

Nous allons donc utiliser la visibilité **`private`** au niveau de nos propriétés.

```php
class Voiture
{
  private $vitesse = 100;
  private $carburant = 'diesel';

  ...
}
```

`private` ne va être uniquement accessibles depuis l’intérieur de la classe. Pour y avoir acces on utilisera les accesseurs.
]

---

class: middle
.left-column[
### Visibilité private
### Les accesseurs et mutateurs
]
.right-column[
.pull-left[
On ne peut plus accèder directement aux attributs d'un objet. Pour lire et modifier leurs valeurs, on passe par des méthodes qui permettent de sécuriser leur utilisation.

Ces méthodes s'appellent des **accesseurs** (`getter`) pour lire leurs valeurs et des **mutateurs** (**`setter`**) pour modifier leurs valeurs.

Une des conventions souvent utilisée et de reprendre le nom de l'attribut pour créer les méthodes, en ajoutant `get` pour les accesseurs et `set` pour les mutateurs.
]
.pull-right[

```php
class Voiture
{
  ...

  public function setVitesse($vitesse)
  {
    $this->vitesse = $vitesse;
  }

  public function getVitesse()
  {
    return $this->vitesse;
  }

  public function setCarburant($carburant)
  {
    $this->carburant = $carburant;
  }

  public function getCarburant()
  {
    return $this->carburant;
  }
  ...
}
```
]
]

---

class: middle
.left-column[
### Visibilité private
### Les accesseurs et mutateurs
]
.right-column[
Pour pouvoir donc modifier les information de notre objet, on passera par les accesseurs et mutateurs, qui sont méthodes déclaré public de l'objet.

```php
$voiture = new Voiture();
$voiture->setCarburant('essence');
$voiture->setVitesse(120);
$voiture->rouler();
```

Nous pouvons ainsi sécuriser la modification de nos propriétés.

**Exemple :** On ne souhaite modifier le carburant que si la nouvel valeur est parmi "`diesel`", "`essence`" ou "`ethanol`".

```php
class Voiture
{
  ...

  public function setCarburant($carburant)
  {
    if(in_array($carburant, ['diesel', 'essence', 'ethanol'])) {
      $this->carburant = $carburant;
    }
  }
}

$voiture = new Voiture();
$voiture->setCarburant('eau');
var_dump($voiture);
```
]

---
class: middle
.left-column[
### Visibilité private
### Les accesseurs et mutateurs
### Le constructeur
]
.right-column[
  PHP permet de déclarer des constructeurs pour les classes via la fonction magique `__construct()`. Les classes qui possèdent cette méthode l'appellent à chaque création d'une nouvelle instance d'objet, ce qui est intéressant pour toutes les initialisations dont l'objet a besoin avant d'être utilisé.

  ```php
  class Voiture
  {
    private $vitesse = 100;
    private $carburant = 'diesel';

    public function __construct($vitesse, $carburant)
    {
      $this->vitesse = $vitesse;
      $this->setCarburant($carburant);
    }
    ...
  }

  $voiture = new Voiture(90, 'essence');
  var_dump($voiture);
  ```
]
---
class: middle
.left-column[
  ### Visibilité private
  ### Les accesseurs et mutateurs
  ### Le constructeur
  ### .red[**Travaux Pratique**]
]
.right-column[
  .left[
  Reprenons notre cas sur la société R.

  - Appliquer l'encapsulation sur la classe `Employe`

  - Définir un constructeur pour pouvoir y définir directement les valeurs des propriétés

  - Sécuriser nos méthodes afin 
  
    - Que l'on ne puisse pas avoir plus de **40 ans d'ancienneté**

    - Un employé doit avoir entre **18 ans et 65 ans**
  ]
]

---
class: middle
.left-column[
  ### Visibilité private
  ### Les accesseurs et mutateurs
  ### Le constructeur
  ### .red[**Travaux Pratique**]
  ### Méthodes magiques
]
.right-column[
  Les méthodes magiques sont des méthodes qui, si elles sont déclarées dans une classe, ont une fonction déjà prévue par le langage.

  - **`__construct()` :** Constructeur de la classe.
  - **`__destruct()` :** Destructeur de la classe.
  - **`__set()` :** Déclenchée lors de l'accès en écriture à une propriété de l'objet.
  - **`__get()` :** Déclenchée lors de l'accès en lecture à une propriété de l'objet.
  - **`__call()` :** Déclenchée lors de l'appel d'une méthode inexistante de la classe (appel non statique).
  - **`__callstatic()` :** Déclenchée lors de l'appel d'une méthode inexistante de la classe (appel statique), disponible depuis PHP 5.3.
  - **`__isset()` :** Déclenchée si on applique isset() à une propriété de l'objet.
  - **`__unset()` :** Déclenchée si on applique unset() à une propriété de l'objet.
  - **`__sleep()` :** Exécutée si la fonction serialize() est appliquée à l'objet.
  - **`__wakeup()` :** Exécutée si la fonction unserialize() est appliquée à l'objet.
  - **`__toString()` :** Appelée lorsque l'on essaie d'afficher directement l'objet : `echo $object.`
  - **`__set_state()` :** Méthode statique lancée lorsque l'on applique la fonction `var_export()` à l'objet
  - **`__clone()` :** Appelés lorsque l'on essaie de cloner l'objet ;
  - **`__autoload()` :** Cette fonction n'est pas une méthode, elle est déclarée dans le scope global et permet d'automatiser les `"include/require"` de classes PHP.
]

---
class: middle
.left-column[
  ### Visibilité private
  ### Les accesseurs et mutateurs
  ### Le constructeur
  ### .red[**Travaux Pratique**]
  ### Méthodes magiques
  ### Attributs et Méthodes static
]
.right-column[
  **Les attributs et méthodes statiques appartiennent à la classe et non à l'objet**. Par conséquent on ne peut pas y accéder par l'opérateur `->` mais plutôt par l'opérateur de résolution de portée `::` précédé par le nom de la classe dans laquelle ils sont définis.
  Pour spécifier si une propriété est statique on déclare le mot clé `static` après la visibilité.
  La valeur d'une propriété statique peut être modifié, tout au long du processus, après l'avoir défini dans la classe.

  Par exemple:

  ```php
  class Voiture
  {
    public static $nbPortes = 5;

    ...

    public static function ajouterPortes()
    {
      self::$nbPortes++;
      echo sprintf("Une voiture avec %d portes", self::$nbPortes);
    }
  }

  var_dump(Voiture::$nbPortes, Voiture::ajouterPortes());
  ```

  **Note :** On utilise un nouveau mot clé **`self`**. Dans la définition d’une classe, « `$this` » se réfère à l’objet actuel, tandis que « `self` » se réfère à la classe actuelle.
]

---
class: middle
.left-column[
  ### Visibilité private
  ### Les accesseurs et mutateurs
  ### Le constructeur
  ### .red[**Travaux Pratique**]
  ### Méthodes magiques
  ### Attributs et Méthodes static
  ### Constante
]
.right-column[
  Une constante de classe est un élément statique par défaut. Son rôle est le même que celui d'une constante classique déclarée à l'aide de la fonction `define()`. **Sa valeur est inchangée, contrairement à la propriété statique** et elle appartient aussi à la classe dans laquelle est elle déclaré et non à l'objet qui constitue l'instance de classe.

  Pour définir une constante on utilise le mot clé `const` suivi du nom de la constante à laquelle on affecte la valeur souhaitée. Par convention l'identifiant de la constante est déclaré en **majuscule**.

  La constante de classe peut être appelée de l'intérieur comme de l'extérieur de la classe grâce à l'opérateur de résolution de portée `::`

  ```php
  class Voiture
  {
    const NB_ROUES = 4;

    ...

    public function rouler()
    {
      echo 'Voiture '.$this->carburant.', roulant à '.$this->vitesse.' KM/h avec '.
      self::NB_ROUES.' roues';
    }
  }

  var_dump(Voiture::NB_ROUES);
  ```
]

---
class: middle
.left-column[
  ### Visibilité private
  ### Les accesseurs et mutateurs
  ### Le constructeur
  ### .red[**Travaux Pratique**]
  ### Méthodes magiques
  ### Attributs et Méthodes static
  ### Constante
  ### .red[**Travaux Pratique**]
]
.right-column[
  Reprenons notre cas sur la société R.

  - Ajouter à la classe `Employe`

    - Une constante `NB_EMPLOYE_MAX` qui aura comme valeur 10, qui correspond à la limite du nombre d'employé.

    - Une propriété statique `$nbEmploye` qui aura comme valeur 0

    - Ajouter une fonction statique `incrementeEmploye` qui aura pour fonctionne d’incrémenter `$nbEmploye`

    - Appeler la méthode à chaque instanciation de la classe `Employe`

  - En fin de code afficher le pourcentage d'employé par rapport à la limite, via une fonction
]

---

class: middle, center, inverse

# 3. Réutilisation du code et gain de temps

---
class: middle
.left-column[
  ## Héritage
]
.right-column[
  L'héritage est un concept fondamental de la POO. C'est d'ailleurs l'un des plus importants puisqu'il permet de réutiliser le code d'une classe autant de fois que l'on souhaite tout en ayant la liberté d'en modifier certaines parties.

  **Voyons notre exemple :**

  Nous disposons d'une classe du nom de **`Vehicule`**. Si on crée une classe du nom de **`Voiture`** qui hérite de **`Vehicule`**, alors **`Voiture`** hérite de tous les membres (attributs et méthodes) qui constituent **`Vehicule`**.

  Autrement dit, si on instancie **`Voiture`**, alors tous les attributs et méthodes de **`Vehicule`** peuvent être appelés à partir de l'objet créé (l'instance de **`Voiture`**). Bien entendu, il faut que les membres appelés soient publiques.

  Dans ce cas on dit que **`Vehicule`** est la classe **mère** et **`Voiture`** est la classe **fille**.

  .center[
    ![image](https://1.bp.blogspot.com/-cXfyqZkLIMM/XhGG_h1bdnI/AAAAAAAAIJ4/p9eNBPXn8AMFgwjboNiqqYE4uQVYgIyLACNcBGAsYHQ/s1600/poo.png)
  ]
]

---
class: middle
.left-column[
  ## Héritage
  ### Mot clé extends
]
.right-column[
  Pour procéder à l'héritage, on fait appel au mot clé **`extends`**, après le nom de la classe comme ceci:

  ```php
  class Vehicule 
  { 
    ...
  }

  class Voiture extends Vehicule 
  { 
    ...
  }
  ```
  Notre classe `Voiture` étend la classe `Vehicule`. Elle hérite et va pouvoir accéder à toutes les méthodes et aux propriétés de notre classe `Vehicule` qui n’ont pas été définies avec le mot clé `private`.
]

---
class: middle
.left-column[
  ## Héritage
  ### Mot clé extends
  ### Visibilité protected
]
.right-column[
  Avec la visibilité **`protected`:** l'attribut est accessible seulement de l'intérieur de la classe dont-il est membre ainsi que de l'intérieur des classes fille qui héritent de cette classe.

  ```php
  class Vehicule
  {
    private $vitesse = 120;
    protected $carburant = 'diesel';
    ...
  }

  class Voiture extends Vehicule
  {
    private $vitesse = 90; // Error
    protected $carburant = 'diesel';
    ...
  }
  ```

  Nous allons avoir une erreur car `$vitesse` est `private` ne peut etre accessible hors de la classe `Voiture` contraiement à `$carburant`.
]
---

class: middle
.left-column[
  ## Héritage
  ### Mot clé extends
  ### Visibilité protected
]
.right-column[
  Maintenant, nous allons ajouter quelques méthodes à notre classe `Vehicule` et regardons comment nous pouvons les utiliser dans les classes filles `Voiture` et `Camion`.

  ```php
  class Vehicule
  {
    const NB_ROUES = 4;
    protected $vitesse = 100;
    protected $carburant = 'diesel';
    public static $nbPortes = 5;

    public function __construct($vitesse, $carburant)
    {
      $this->vitesse = $vitesse;
      $this->carburant = $carburant;
    }

    public function rouler() { ... }

    public static function ajouterPortes() { ... }
  }

  class Voiture extends Vehicule { }

  class Camion extends Vehicule { }
  ```
]

---

class: middle
.left-column[
  ## Héritage
  ### Mot clé extends
  ### Visibilité protected
]
.right-column[
  **Instanciation et utilisation :**

  ```php

  $vehicule = new Vehicule(120, 'diesel');
  $camion = new Camion(150, 'essence');
  $voiture = new Voiture(90, 'ethanol');

  $vehicule->rouler();
  $camion->rouler();
  $voiture->rouler();

  var_dump($vehicule, $camion, $voiture);
  ```

  Lorsqu’une **classe fille hérite d’une classe mère**, elle peut accéder et utiliser tous les membres non privés de la classe mère. Nous le savons, mais est-ce qu'une classe fille peut avoir ses propres propriétés et méthodes ? Oui, elle peut en avoir.

  ```php
  class Vehicule { ... }

  class Voiture extends Vehicule
  {
    public function conduire()
    {
      echo 'Bonne conduite à '.$this->vitesse.' Km/h  ...\n';
    }
  }


  $voiture = new Voiture(90, 'ethanol');
  $voiture->conduire();
   ```
]