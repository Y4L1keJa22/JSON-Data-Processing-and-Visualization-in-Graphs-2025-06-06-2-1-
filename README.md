# JSON-Data-Processing-and-Visualization-in-Graphs-2025-06-06
This Project was made for an individual Class Project in my Web Programming Class, nearing the end of my 2nd Grade 1st Semester, majoring in Computer Engineering, in Gachon University, Global Campus(South Korea). 

WebPage Project that uses HTML File, CSS, JavaScript, PHP File, SQL File and XAMPP(DataBase). 

Project takes Form data as a String, then sends Form data to DataBase, then Parses data as JSON, then lastly displays DataBase data via graphs/charts(chart.js).

Form is in "WebProgramming_P3.html"

Visualization is in "WebProgramming_P2.php"

Experimentation Proof is in "WebProgrammingPresentaion_GANGABRIEL.pptx"

How to run:
1. Firstly, you must download ALL files in this repository
2. Setup your database. Install XAMPP and make a phpMyAdmin Account via XAMPP. 
3. Make a database in phpMyAdmin strictly called "income", then make a table in "income" database also strictly named "income"
4. In "income" table, columns must be id(INT),date(DATE),income(FLOAT), comments(VARCHAR)
5. After installing XAMPP and setting up your database, find XAMPP's wed directory folder called "htdocs" in File Explorer. Then move all Project Files to this folder.
6. Open XAMPP Application. Then start the XAMPP servers, only Apache is needed to be started(tested: 2025-06-06)
7. In your browser, type "localhost/" then the file name you want to open. In this case, "localhost/Programming_P3.html" shows the Form for sending data to the database, and "localhost/Programming_P2.php" shows the visualization of the json-structured data via graphs/charts(chart.js)

Last Update: 2025-06-06 17:00:00

Contact: stasishat06@gmail.com
