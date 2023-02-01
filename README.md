Application Approval Form
--------------------------
Create a feature that will allow our users to submit a job application on the front end of the website. Also, our administrators need a way to manage all of these applications.


PART 1 - Front-end
Create a page and a form on the page that can be filled by Guests or by logged-in Users. We need to collect the following data:

-First Name (required)
-Last Name (required)
-Email (required | unique)
-Phone (not required)
-Date of Birth
-Job (required | options: Manager, Programmer, HR, Support)
-Previous experience (checkbox)

*If the user is already logged in pre-fill First Name, Last Name, Email, and Phone (if it's available)
*If the user has already submitted an application do not allow sending new. Display details about the sent application.
*Kepp current website UI

PART 2 - Back-end
Create an admin section to manage submitted applications. We need to show a table with data:

-Submited Date
-Application ID
-First Name
-Last Name
-Email
-Phone
-Date of Birth
-Job
-Previous experience
-Status (In process, Approved, Denied)

*Add search (Searchable fields: First Name, Last Name, Email, Phone)
*Add filter by Job (By default show all)
*Use pagination and preserve search and filter parameters

Add APPROVE, DENY and DELETE buttons (use any type of confirmation on these buttons)
*If the application has been denied allow it to be APPROVED
*If the application has been approved allow it to be DENIED
*DELETE will "soft delete" the application
*Kepp current admin UI
*Use current admin sections menu

Also, here is the database you should import. 

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
