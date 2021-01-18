# outlook-add-ics-alarm
Small PHP script for adding VALARMs to shared Outlook calendars.

## But why.

If you for some reason or other are not able to add your Outlook.com calendar to your iPhone by logging in to your Outlook account directly from the phone this could provide a way to at least get notified when some event in your outlook.com calendar start and also that something is due to happen at certain dates according to the outlook calendar. This makes it possible to coordinate two calendars at least somewhat easier directly from your phone.

### But how.

If you don't know how to do any of the things in the below list this script is not for you. Sorry.

* Clone the repository somewhere on a web server that is set up to run _index.php_ as default in folders.
* Go to Outlook.com and share the wanted calendar with your private email account.
* Copy the link looking like https://outlook.office365.com/owa/calendar/LOTSOFSTUFFZ.ics
* Create a new URL like so: https://yourdomain.tld/outlook-add-ics-alarm/?https://outlook.office365.com/owa/calendar/LOTSOFSTUFFZ.ics
* Create a new shared calendar on your iPhone, and use the link you created in the previous step.
* The script will when invoked pull down your public calendar and add a notification 15 minutes before every event in your job calendar.

No, this is not perfect, but after missing lots of meetings due to not being willing to add a certain calendar to my phone this is what I came up with - for now.
