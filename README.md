## 🔐 Analyse de Vulnérabilités Web – SQL Injection, XSS, XXE, Désérialisation

### Vue d’ensemble
Ce dépôt regroupe les travaux réalisés dans le cadre de l’**Activité 4** du programme  
**D-Clic 2025 (OIF)**.
L’objectif était d’identifier, simuler et comprendre plusieurs vulnérabilités courantes des
applications web, puis de proposer des solutions concrètes pour les corriger.

Les sous-activités incluent :
- **Injection SQL**
- **Attaque XSS**
- **Attaque XXE**
- **Attaque via désérialisation d’objets**

Chaque section du rapport est accompagnée de captures, d’analyses et d’interprétations.

---

### 📂 Structure du dépôt
- /Injection_SQL_XSS/ Tests et captures activité 4.1
- /XXE/ Scripts XML, captures et explications activité 4.2
- /Deserialisation/ Scripts PHP modifiés, captures activité 4.3
- Rapport complet avec toutes les simulations


---

## Activité 4.1 — Injection SQL & XSS

### Injection SQL
Scénarios testés :
- `' OR '1'='1` → connexion sans identifiants valides  
- Bypass de compte ciblé (ex. Admin)

**Résultat :**  
Le site se connecte sans vérification correcte des identifiants.  
Les requêtes SQL sont vulnérables à une modification directe de la logique.

**Solution appliquée :**  
Utilisation de **requêtes préparées** pour empêcher toute injection.

---

### Attaque XSS
Tests effectués :
- `<B>Bonjour</B>` → exécution HTML  
- `<script>document.write('Bonjour')</script>` → exécution JS  
- `<script>document.write(document.cookie)</script>` → extraction d’un cookie simulé

**Résultat :**  
Le navigateur exécute directement le code soumis — preuve que l’entrée utilisateur est affichée sans filtrage.

**Solution appliquée :**  
Utilisation de `htmlspecialchars()` dans l’affichage des messages.

---

## Activité 4.2 — XXE (XML External Entity)

### Tests réalisés :
- XML simple  
- XML avec entité interne  
- XML provoquant une boucle (déni de service)  
- XXE exploitant `file://` pour lire un fichier local (`passwd.txt`)

**Résultat :**  
L’application accepte et exécute des entités externes → vulnérabilité critique.

**Solution appliquée :**  
Désactivation de la résolution d’entités XML dans le script PHP (`libxml_disable_entity_loader(true)` ou options DOM appropriées).

---

## Activité 4.3 — Attaque via Désérialisation PHP

### Tests réalisés :
- Génération d’un objet `info` sérialisé  
- Création d’un scénario d’attaque exploitant la classe `File`  
- Suppression automatique d’un fichier `index1.html` via la méthode `__destruct()`

**Résultat :**  
Le simple fait de désérialiser des données provenant de `$_GET` permet d’exécuter du code destructeur.

**Solution appliquée :**
- Interdire la désérialisation de données non fiables  
- Utiliser `unserialize($data, ['allowed_classes' => ['info']])`  
- Recommander JSON comme alternative plus sûre

---

### 📂 Documentation
Tous les détails des tests, captures d'écran et interprétations complètes sont disponibles dans :

📌 <a href="./Rapport activités S4.pdf">Rapport simulations et propositions</a>

*[Note : Réactualisez votre page en cas d'erreur d'ouverture du pdf]*

---

### Compétences démontrées
- Analyse de vulnérabilités web  
- Simulation d’attaques réelles sur un mini-site  
- Compréhension des mécanismes SQL/XSS/XXE/Désérialisation  
- Mise en œuvre de protections adaptées  
- Documentation technique structurée  

---

### 👤 Auteur
**Fortuné** <br>
D-Clic 2025 — Sécurité des applications web
