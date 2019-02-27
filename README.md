# PHP Atomchat

**PHP Atomchat** is a **free PHP chat script** for low-volume and individual websites.

## Features
- Works OOTB
- Completely anonymous
- No registration or passwords ever
- Emoji auto-conversion
- File uploads
- Themeable
- Multi-lingual
- No database required

### Logging

The only logging applies to the chat history. The script can create either daily logs or one continously growing endless log. Additional options exist to set a maximum size, low-size warning trigger, and to auto-reset the log. Downloaded logs maintain all formatting -- no styles though -- and can be viewed offline with any HTML capable application. The default are unmetered daily logs.

### Emojis

The definition file `emo.txt` only covers a basic set to avoid broken symbols on different devices and platforms. Chrome in particular has very poor support.

### Uploads

Image types `gif, jpeg, jpg, png` are converted to Base64 strings to minimise server requests. Only these will get auto-scaled thumbnails. Any other types are printed as normal text links. You may need to edit your CSP to add an exception for the `base` handler if you don't see the thumbnails. Refer to the *UPLOADS* section regarding file types.

### Themes

The included CSS themes are probably not the most fashionable. They are kept simple and primarily aim to provide guidance.

### Languages

The script attempts to auto-detect the user's language preference and checks if a translation exists. If so, the interface will use that language. Else, the value of `$lang_def` is applied. The user can change language settings at any time. Refer to `TRANSLATE.md` if you want to add a new translation.

### Super User

Logging in as super user gives you an extra button to reset the log on the fly. May come in handy when using auto-reset. Refer to the *SUPER USER* section for details.

### Limitations And Issues

- Mobile usability requires at least a 5 inch screen.

- If JavaScript is not available, or when using a text-mode browser, the page needs manual refreshing to execute the selected action or to view any new posts. 

- Setting `$rate` below 2000 may freeze the browser.
