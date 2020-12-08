# Text With Button Widget for OctoberCMS

### Introduction
A simple widget that allows a button to exist inside the text field and developers can define a handler to work when the button is clicked.

![Screenshot of widget](https://i.imgur.com/m9jYD3H.png)

### Usage
Mark the field type as `text-with-button` and then specify the handler.
```
    type: text-with-button
    buttonText: Clear
    buttonHandler: onApiKeyClear
```

And obviously you need to define the handler in the controller where this is going to be used.
```
public function onApiKeyClear()
{
    ... call the settings clear or whatever logic here ...
}
```