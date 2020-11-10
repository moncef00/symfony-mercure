# Real-time Chat application (Symfony 5, Mercure, Vue)



Il faut savoir que le dev d’un tel chat est hyper simple, là où ça c’est grandement plus compliqué c’est pour la mise en prod et plus particulièrement de mercure (avec docker), c’est pour cette raison que entre autre la démo n’est pas en HTTPS.

On va commencer par installer tout ce qu’il nous faut, c’est à dire :

Symfony
Vue.js
Mercure (en utilisant une image docker)
Installation de Symfony
Pour Symfony rien de plus simple, mais je vous redonne la procédure :

wget https://get.symfony.com/cli/installer -O - | bash
/your_home_directory/.symfony/bin/symfony new sf4chatMercure
Installation de Vue.js
Pour vue.js c’est un peu plus compliqué mais rien de transcendant non plus :

composer require symfony/webpack-encore-bundle
yarn install
Vous ajoutez cette ligne dans le fichier webpack.config.js :

1
.enableVueLoader()
Puis on installe les bibliothèques vue.js :

yarn add vue vue-loader@^15.0.11 vue-template-compiler --dev
Installation de Mercure
On va d’abord installer le Hub de Mercure, c’est lui qui va se charger de dispatcher les messages du chat aux navigateurs (ou toutes autres plateformes). Il y a plusieurs méthodes pour cela, moi je passe par une image docker :

$env:JWT_KEY='Moncef00'; $env:ADDR='localhost:3000'; $env:DEMO='1'; $env:ALLOW_ANONYMOUS='1'; $env:CORS_ALLOWED_ORIGINS='http://localhost:8000'; $env:PUBLISH_ALLOWED_ORIGINS='http://localhost:3000'; c:\mercure\mercure.exe
Pour installer le composant Symfony :

composer require mercure
Vous allez devoir générer un token JWT grâce à la clé que vous avez mis dans votre container (JWT_KEY), vous pouvez vous aider de ce site : https://jwt.io/

Il faut ensuite modifier les 2 lignes suivantes dans votre fichier .env.local :

MERCURE_PUBLISH_URL=http://chat.localhost:3000/.well-known/mercure
MERCURE_JWT_TOKEN=VotreJWTtoken

