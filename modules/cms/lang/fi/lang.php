<?php return [
  'cms_object' => [
    'invalid_file' => 'Virheellinen tiedostonimi: :name. nimessä voi olla vain kiraimia, numeroita, alaviivoja, viiva ja pisteitä. Esimerkkejä tiedotonimistä: page.htm, page, subdirectory/page',
    'invalid_file_inspector' => 'Virheellinen tiedostonimi. Tiedostonimessä voi olla vain symboleja, alaviivoja, viivoja ja pisteitä. Esimerkkejä tiedotonimistä: page.htm, page, subdirectory/page',
    'invalid_property' => 'Ominaisuutta \':name\' ei voida asettaa',
    'file_already_exists' => 'Tiedosto \':name\' on jo olemassa.',
    'error_saving' => 'Virhe tallennettaessa tiedostoa \':name\'. Tarkista kirjoitusoikeudet.',
    'error_creating_directory' => 'Virhe luotaessa kansiota :name. Tarkista kirjoitusoikeudet.',
    'invalid_file_extension' => 'Virheellinen tiedostopääte: :invalid. Sallitut päätteet ovat: :allowed.',
    'error_deleting' => 'Virhe poistaessa teemaa \':name\'. Tarkista kirjoitusoikeudet.',
    'delete_success' => 'Poistetut teemat: :count.',
    'file_name_required' => 'Tiedoston nimi -kenttä on vaadittu.',
    'safe_mode_enabled' => 'Turvatila on käytössä.',
  ],
  'dashboard' => [
    'active_theme' => [
      'widget_title_default' => 'Verkkosivusto',
      'online' => 'Online',
      'maintenance' => 'Ylläpitotila',
      'manage_themes' => 'Hallitse teemoja',
      'customize_theme' => 'Kustomoi teema',
    ],
  ],
  'theme' => [
    'not_found_name' => 'Teemaa \':name\' ei löydy.',
    'by_author' => 'Tekijä: :name',
    'active' => [
      'not_set' => 'Aktiivista teemaa ei ole asetettu.',
      'not_found' => 'Aktiivista teemaa ei löytynyt.',
      'is_locked' => 'Teema \':theme\' on lukittu ja sitä ei voi käyttää. Ole hyvä ja tee kopio tai luo lapsiteema.',
    ],
    'edit' => [
      'not_set' => 'Muokattavaa teemaa ei ole asetettu.',
      'not_found' => 'Muokattavaa teemaa ei löydy.',
      'not_match' => 'Objektia, jota yrität muokata, ei kuulu muokattavaan teemaan. Päivitä sivu uudelleen.',
    ],
    'settings_menu' => 'Sivuston teema',
    'settings_menu_description' => 'Esikatsele luettelo asennetuista teemoista ja valitse aktiivinen teema.',
    'default_tab' => 'Ominaisuudet',
    'publish_tab' => 'Julkaise',
    'advanced_tab' => 'Edistynyt',
    'name_label' => 'Nimi',
    'name_create_placeholder' => 'Uuden teeman nimi',
    'author_label' => 'Julkaisija',
    'author_placeholder' => 'Henkilön tai yrityksen nimi',
    'description_label' => 'Kuvaus',
    'description_placeholder' => 'Teeman kuvaus',
    'homepage_label' => 'Kotisivu',
    'homepage_placeholder' => 'Verkkosivuston URL-osoite',
    'author_code_label' => 'Julkaisijan koodi',
    'author_code_placeholder' => 'Uniikki julkaisijan koodi, jota käytetään jakelusssa',
    'code_label' => 'Koodi',
    'code_placeholder' => 'Uniikki koodi teeman jakeluun',
    'parent_label' => 'Isäntäteema',
    'no_parent' => '-- ei isäntää --',
    'database_templates_label' => 'Tietokannan tila',
    'database_templates_description' => 'Tallenna teeman tiedot tietokantaan tiedostotallennuksen sijaan',
    'preview_image_label' => 'Esikatselukuva',
    'preview_image_placeholder' => 'Polku teeman esikatselukuvaan.',
    'dir_name_label' => 'Hakemiston nimi',
    'dir_name_create_label' => 'Teeman kohdehakemisto',
    'theme_label' => 'Teema',
    'theme_title' => 'Teemat',
    'activate_button' => 'Aktivoi',
    'active_button' => 'Aktivoi',
    'customize_theme' => 'Kustomoi teema',
    'customize_button' => 'Kustomoi',
    'duplicate_button' => 'Monista',
    'duplicate_title' => 'Monista teema',
    'duplicate_theme_success' => 'Teema monistettu!',
    'manage_button' => 'Hallinnoi',
    'manage_title' => 'Hallinnoi teemaa',
    'edit_properties_title' => 'Teemaa',
    'edit_properties_button' => 'Muokkaa ominaisuuksia',
    'save_properties' => 'Tallenna ominaisuudet',
    'import_button' => 'Tuonti',
    'import_title' => 'Tuo teema',
    'import_theme_success' => 'Teema tuotu!',
    'import_uploaded_file' => 'Teemaarkistotiedosto',
    'import_overwrite_label' => 'Ylikirjoita olemassaolevat tiedostot',
    'import_overwrite_comment' => 'Poistä tämä käytöstä tuodaksesi vain uudet tiedostot',
    'import_folders_label' => 'Kansiot',
    'import_folders_comment' => 'Valitse teeman kansiot, jotka haluat tuoda.',
    'export_button' => 'Vie',
    'export_title' => 'Vie teema',
    'export_folders_label' => 'Kansiot',
    'export_folders_comment' => 'Valitse teeman kansiot, jotka haluat viedä',
    'delete_button' => 'Poista',
    'delete_confirm' => 'Positetaanko tämä teema? Toimintoa ei voi perua!',
    'delete_active_theme_failed' => 'Aktiivista teemaa ei voida poistaa. Ota ensin toinen teema käyttöön',
    'delete_theme_success' => 'Teema poistettu!',
    'create_title' => 'Luo teema',
    'create_button' => 'Luo',
    'create_new_blank_theme' => 'Luo uusi tyhjä teema',
    'create_theme_success' => 'Teema luotu!',
    'create_theme_required_name' => 'Anna teemalle nimi.',
    'new_directory_name_label' => 'Teemakansio',
    'new_directory_name_comment' => 'Anna uusi hakemisto monistetulle teemalle.',
    'dir_name_invalid' => 'Nimi voi sisältää ainoastaan numeroja, latinalaisia kirjaimia sekä seuraavia merkkejä: _-',
    'dir_name_taken' => 'Haluttu teemakansio on jo olemassa.',
    'find_more_themes' => 'Etsi lisää teemoja',
    'saving' => 'Tallennetaan teemaa...',
    'return' => 'Palaa teemalistaan',
    'setting_edit_theme' => 'Muutetaan teeman muokkaukset',
    'edit_theme_changed' => 'Muokattava teema muutettu',
    'no_themes_found' => 'Teemoja ei löytynyt',
  ],
  'maintenance' => [],
  'page' => [
    'not_found_name' => 'Sivua \':name\' ei löytynyt',
    'not_found' => [
      'label' => 'Sivua ei löytynyt',
      'help' => 'Haettua sivua ei löydy.',
    ],
    'custom_error' => [
      'label' => 'Sivuvirhe',
      'help' => 'Olemme pahoillamme, mutta joku meni vikaan ja sivua ei voida näyttää.',
    ],
    'menu_label' => 'Sivut',
    'unsaved_label' => 'Tallenntamattomat sivu(t)',
    'no_list_records' => 'Yhtään sivua ei löytynyt',
    'new' => 'Uusi sivu',
    'invalid_url' => 'Virheellinen URL-muoto. URL täytyy alkaa kauttamerkillä ja saa sisältää ainoastaan numeroita, latinalaisia kirjaimia sekä seuraavia merkkejä: ._-[]:?|/+*^$',
    'delete_confirm_multiple' => 'Poista valitut sivut?',
    'delete_confirm_single' => 'Posita tämä sivu?',
    'no_layout' => '-- ei ulkoasua --',
    'cms_page' => 'CMS-sivu',
    'title' => 'Sivun nimi',
    'url' => 'Sivun URL-osoite',
    'url_required' => 'Sivun URL on pakollinen.',
    'file_name' => 'Sivun tiedostonimi',
    'editor_node_name' => 'Sivut',
    'editor_sorting' => 'Järjestä Sivut',
    'editor_sort_by_url' => 'URL',
    'editor_sort_by_title' => 'Otsikko',
    'editor_sort_by_file_name' => 'Tiedostonimi',
    'editor_grouping' => 'Ryhmitä Sivut',
    'editor_group_by_filepath' => 'Tiedostopolku',
    'editor_group_by_url' => 'URL',
    'editor_display' => 'Näytä',
    'editor_display_title' => 'Otsikko',
    'editor_display_url' => 'URL',
    'editor_display_file' => 'Tiedostopolku',
    'editor_markup' => 'Markup',
    'editor_code' => 'Koodi',
    'description_hint' => 'Kuvaus on vaihtoehtoinen ja näkyy vain ylläpidon käyttäjille omassa käyttöliittymässä.',
    'create_new' => 'Uusi sivu',
  ],
  'layout' => [
    'not_found_name' => 'Ulkoasua \':name\' ei löytynyt',
    'menu_label' => 'Ulkoasut',
    'unsaved_label' => 'Tallentamattomat ulkoasu(t)',
    'no_list_records' => 'Ei ulkoasuja',
    'new' => 'Uusi ulkoasu',
    'delete_confirm_multiple' => 'Poista valitut ulkoasut?',
    'delete_confirm_single' => 'Poista tämä ulkoasu?',
    'editor_node_name' => 'Asettelu',
    'create_new' => 'Uusi Asettelu',
  ],
  'partial' => [
    'not_found_name' => 'Osiota \':name\' ei löydy.',
    'invalid_name' => 'Osion nimi: :name ei ole kelvollinen.',
    'menu_label' => 'Osiot',
    'unsaved_label' => 'Tallentamaton osio(t)',
    'no_list_records' => 'Osioita ei löydy',
    'delete_confirm_multiple' => 'Poista valitut osiot?',
    'delete_confirm_single' => 'Poista tämä osio?',
    'editor_node_name' => 'Osiot',
    'new' => 'Uusio osio',
    'create_new' => 'Uusi osio',
  ],
  'content' => [
    'not_found_name' => 'Sisältötiedostoa \':name\' ei löydy.',
    'menu_label' => 'Sisältö',
    'unsaved_label' => 'Tallentamaton sisältö',
    'no_list_records' => 'Sisältötiedostoja ei löydy',
    'delete_confirm_multiple' => 'Poista valitut sisältötiedostot tai hakemistot?',
    'delete_confirm_single' => 'Poista tämä sisältötiedosto?',
    'editor_node_name' => 'Sisältötiedostot',
    'new' => 'Uusi sisältötiedosto',
    'editor_content' => 'Sisältö',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Ajax käsittelijän nimi: :name ei ole kelvollinen.',
    'not_found' => 'AJAX käsittelijää \':name\' ei löydy.',
  ],
  'cms' => [
    'menu_label' => 'CMS',
  ],
  'sidebar' => [
    'add' => 'Lisää',
    'search' => 'Etsi...',
  ],
  'editor' => [
    'settings' => 'Asetukset',
    'title' => 'Nimi',
    'new_title' => 'Uusi sivun nimi',
    'url' => 'URL',
    'filename' => 'Tiedostonimi',
    'layout' => 'Ulkoasu',
    'description' => 'Kuvaus',
    'preview' => 'Esikatselu',
    'meta' => 'Meta',
    'meta_title' => 'Meta-otsikko',
    'meta_description' => 'Meta-kuvaus',
    'markup' => 'Markup-kieli',
    'code' => 'Koodi',
    'content' => 'Sisältö',
    'hidden' => 'Piilotettu',
    'hidden_comment' => 'Piilotetut sivut ovat saatavilla ainoastaan hallintapaneeliin kirjautuneille käyttäjille.',
    'enter_fullscreen' => 'Siirry kokoruudun tilaan',
    'exit_fullscreen' => 'Poistu kokoruudun tilasta',
    'open_searchbox' => 'Avaa haku',
    'close_searchbox' => 'Sulje haku',
    'open_replacebox' => 'Avaa korvaa',
    'close_replacebox' => 'Sulje korvaa',
    'commit' => 'Ota käyttöön',
    'reset' => 'Palauta',
    'commit_confirm' => 'Haluatko varmasti ottaa käyttöön tekemäsi muutokset tiedostojärjestelmässä? Tämä yliajaa olemassa olevat tiedostot järjestelmässä',
    'reset_confirm' => 'Haluatko varmasti palauttaa tämän tiedoston tiedostojärjestelmässä olevaan versioon? Tämä yliajaa kokonaan tiedoston, joka on tiedostojärjestelmässä',
    'committing' => 'Otetaan käyttöön',
    'resetting' => 'Palautetaan',
    'commit_success' => ':type on otettu käyttöön tiedostojärjestemässä',
    'reset_success' => ':type on palautettu versioon tiedostojärjestelmässä',
    'error_loading_header' => 'Virhe ladattaessa pohjaa',
    'component_list' => 'Komponentit',
    'component_list_description' => 'Lisätäksesi komponentin, klikkaa sitä tai raahaa ja pudota Markup-editoriin.',
    'info' => 'Info',
    'refresh' => 'Lataa uudelleen',
    'create' => 'Luo',
    'manage_themes' => 'Hallinnoi teemoja',
    'error_no_doctype_permissions' => 'Sinulla ei ole riittäviä oikeuksia hallinnoida tiedostoa :doctype',
  ],
  'asset' => [
    'menu_label' => 'Aineistot',
    'unsaved_label' => 'Tallentamattomia aineistoja',
    'drop_down_add_title' => 'Lisää...',
    'drop_down_operation_title' => 'Toiminto...',
    'upload_files' => 'Siirrä tiedoto(ja)',
    'create_file' => 'Luo tiedosto',
    'create_directory' => 'Luo kansio',
    'directory_popup_title' => 'Uusi kansio',
    'directory_name' => 'Kansion nimi',
    'directory_name_required' => 'Kansion nimi on pakollinen',
    'rename_name_required' => 'Nimi on pakollinen',
    'rename' => 'Nimeä uudelleen',
    'delete' => 'Poista',
    'move' => 'Siirrä',
    'moving' => 'Siirretään valittuja',
    'moved' => 'Siirto onnistui',
    'saved' => 'Tiedosto tallennettu',
    'deleted' => 'Tiedosto poistettu',
    'select' => 'Valitse',
    'new' => 'Uusi tiedosto',
    'rename_popup_title' => 'Nimeä uudelleen',
    'rename_new_name' => 'Uusi nimi',
    'invalid_path' => 'Polku voi sisältää ainoastaan numeroita, latinalaisia kirjaimia, välilyöntejä sekä seuraavia merkkejä: ._-/',
    'error_deleting_file' => 'Virhe poistettaessa tiedostoa :name.',
    'error_deleting_dir_not_empty' => 'Virhe poistaessa hakemistoa :name. Hakemisto ei ole tyhjä.',
    'error_deleting_dir' => 'Virhe poistaessa hakemistoa :name.',
    'invalid_name' => 'Nimessä voi olla vain numeroita, kirjaimia, välilyöntejä ja seuraavia merkkejä: ._-',
    'original_not_found' => 'Alkuperäistä tiedostoa tai hakemistoa ei löydy',
    'already_exists' => 'Tiedosto tai hakemisto tällä nimillä on jo olemassa',
    'error_renaming' => 'Virhe tiedoston tai hakemiston uudelleennimeämisessä',
    'name_cant_be_empty' => 'Nimi on pakollinen',
    'too_large' => 'Tiedosto on liian iso. Suurin sallittu koko on :max_size',
    'type_not_allowed' => 'Vain seuraavat tiedostotyypit ovat sallittuja: :allowed_types',
    'file_not_valid' => 'Tiedosto ei kelpaa',
    'error_uploading_file' => 'Virhe siirrettäessä tiedostoa \':name\': :error',
    'move_please_select' => 'ole hyvä ja valitse',
    'move_destination' => 'Kohdekansio',
    'move_popup_title' => 'Siirrä aineistoja',
    'move_button' => 'Siirrä',
    'selected_files_not_found' => 'Valittuja tiedostoja ei löydy',
    'select_destination_dir' => 'Valitse kohdehakemisto',
    'destination_not_found' => 'Kohdehakemistoa ei löydy',
    'error_moving_file' => 'Virhe siirtäessä tiedostoa :file',
    'error_moving_directory' => 'Virhe siirrettäessä kansiota :dir',
    'error_deleting_directory' => 'Virhe poistettaessa alkuperäinen kansio :dir',
    'no_list_records' => 'Tiedostoja ei löytynyt',
    'delete_confirm' => 'Poista valitut tiedostot ja/tai kansiot?',
    'path' => 'Polku',
    'editor_node_name' => 'Kirjasto',
    'open' => 'Avaa',
  ],
  'component' => [
    'menu_label' => 'Komponentit',
    'unnamed' => 'Nimeämätön',
    'no_description' => 'Ei annettua kuvausta',
    'alias' => 'Alias',
    'alias_description' => 'Uniikki nimi komponentille kun käytössä sivulla tai ulkoasun koodissa.',
    'validation_message' => 'Komponentin alias on vaadittu ja se voi sisältää ainoastaan latinalaisia kirjaimia, numeroita ja alaviivoja. Aliaksien pitäisi alkaa latinalaisella kirjaisimella.',
    'invalid_request' => 'Mallia ei voida tallentaa koska komponentin tiedot eivät ole kelvollisia.',
    'no_records' => 'Komponentteja ei löytynyt',
    'not_found' => 'Komponenttia \':name\' ei löydy.',
    'method_not_found' => 'Komponentti \':name\' ei sisällä metodia \':method\'.',
    'expand_or_collapse' => 'Laajenna tai sulje komponenttilista',
    'remove' => 'Poista komponentti',
    'expand_partial' => 'Laajenna komponentti osio',
  ],
  'template' => [
    'invalid_type' => 'Tuntematon teeman tyyppi.',
    'not_found' => 'Teemaa ei löytynyt.',
    'saved' => 'Teema tallennettu.',
    'saved_to_db' => 'Teema tallennettu tietokantaan',
    'file_updated' => 'Teematiedosto päivitetty',
    'reset_from_template_success' => 'Pohja päivitettiin tiedostosta',
    'reloaded' => 'Pohja ladattu uudelleen',
    'deleted' => 'Pohja poistettu',
    'no_list_records' => 'Tietueita ei löytynyt',
    'delete_confirm' => 'Poista valitut teemat?',
    'order_by' => 'Järjestä',
    'last_modified' => 'Viimeksi muokattu',
    'storage' => 'Tallennustila',
    'template_file' => 'Teematiedosto',
    'storage_filesystem' => 'Tiedostojärjestelmä',
    'storage_database' => 'tietokanta',
    'update_file' => 'Päivitä teematiedosto',
    'reset_from_file' => 'Nollaa teematiedostosta',
  ],
  'permissions' => [
    'name' => 'CMS',
    'manage_content' => 'Hallinnoi sivuston sisältötiedostoja',
    'manage_assets' => 'Hallinnoi sivuston assetteja - kuvat, JavaScript-tiedostot, CSS-tiedostot',
    'manage_pages' => 'Luo, muokkaa ja poista sivuston sivuja',
    'manage_layouts' => 'Luo, muokkaa ja poista sivuston ulkoasuja',
    'manage_partials' => 'Luo, muokkaa ja poista CMS-järjestelmän osioita',
    'manage_themes' => 'Ota käyttöön ja poista käytöstä CMS-järjestelmän teemoja',
    'manage_media' => 'Siirrä ja hallinnoi mediatiedostoja - kuvia, videoita, ääniä, dokumentteja',
    'manage_theme_options' => 'Muokkaa aktiivisen teeman asetuksia',
  ],
  'theme_log' => [
    'hint' => 'Tämä loki näyttää muutokset teemaan järjestelmänvalvojilta hallintapaneelissa.',
    'menu_label' => 'Teemaloki',
    'menu_description' => 'Katso tehdyt muutokset aktiiviseen teemaan.',
    'empty_link' => 'Tyhjennä teemaloki',
    'empty_loading' => 'Tyhjennetään teemaloki...',
    'empty_success' => 'Teemaloki tyhjätty',
    'return_link' => 'Palaa teemalokiin',
    'id' => 'ID',
    'id_label' => 'Loki ID',
    'created_at' => 'Pvm & aika',
    'user' => 'Käyttäjä',
    'type' => 'Tyyppi',
    'type_create' => 'Luo',
    'type_update' => 'Päivitä',
    'type_delete' => 'Poista',
    'theme_name' => 'Teema',
    'theme_code' => 'Teeman koodi',
    'old_template' => 'Teema (vanha)',
    'new_template' => 'Teema (uusi)',
    'template' => 'Teema',
    'diff' => 'Muutokset',
    'old_value' => 'Vanha arvo',
    'new_value' => 'Uusi arvo',
    'preview_title' => 'Teeman muutokset',
    'template_updated' => 'Teema on päivitetty',
    'template_created' => 'Teema on luotu',
    'template_deleted' => 'Teema on poistettu',
  ],
];
