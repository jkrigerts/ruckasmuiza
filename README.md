<p align="center"><img src="https://www.ruckasmuiza.lv/logo.png" width="150" alt="Ruckas muižas logo"></p>

## Par Ruckas muižas mājaslapu

Ruckas muižas mājaslapai ir jābūt elegantai, ātrai un viegli uztveramai, lai ikviens, to aplūkojot, justos gaidīts.

## Saistītie dokumenti

-   [Jira projekts ](https://amixam.atlassian.net/jira/software/projects/RUC/boards/3)
-   [Grafiskā identitāte](https://vtdtlv-my.sharepoint.com/:b:/g/personal/jekabs_krigerts_vtdt_edu_lv/EYHS1j94mHZBkFFMxzhkyqwBmPRvo8pi2EhaFgB15C1Bzg?e=5nerAn)
-   Dizaina paraugs: [Figma](https://www.figma.com/file/p4AWgLxn8VQg4ALTbi27Um/Untitled?type=design&node-id=0%3A1&mode=design&t=ioqNgiYVKJmTSuXw-1)
-   Parauga mājaslapa: [rucka-dev.vercel.app](https://rucka-dev.vercel.app/)
-   Līdzšinējā mājaslapa: [ruckasmuiza.lv](https://www.ruckasmuiza.lv/)
-   Cits dizaina projekts: [Figma alternative](https://www.figma.com/file/zBgzpYKdLpGUJQn8gqQQsE/RM-M%C4%81jaslapa?type=design&node-id=0%3A1&mode=design&t=Dj011RlAZiFqNtvx-1)

## Resursi

-   [Dažas fotogrāfijas](https://vtdtlv-my.sharepoint.com/:f:/g/personal/jekabs_krigerts_vtdt_edu_lv/ElKUWwpomlxAt4kC4Hh2pPsBrIHr-1UlOJkZzXJHlez02Q?e=I2mryM) no muižas ārpuses rudenī.

## Izmantotās tehnoloģijas

Projekts bāzēts uz [TALL stack](https://tallstack.dev/):

-   [Laravel](https://laravel.com/)
-   [Livewire](https://laravel-livewire.com/)
-   [Alpine.js](https://alpinejs.dev/)
-   [Tailwind CSS](https://tailwindcss.com/)

Administratora panelis veidots ar [filament](https://filamentphp.com/).

_Hostings_ tiks veikts uz [area](https://area.lv/lv/) servera.

## Projekta lokāla palaišana

1. `git clone`
2. `cd ruckasmuiza`
3. `composer install`
4. `php artisan migrate`
5. `npm install`
6. `php artisan storage:link`
7. Vienā terminālī `npm run dev`
8. Otrā terminālī `php artisan serve`
9. Ja vēlies piekļūt _admin_ panelim, jāizveido lietotājs ar `php artisan make:filament-user` un jādodas uz `/admin`

## Atbalstītāji

Projektu atbalsta Tava iedvesma radīt!
