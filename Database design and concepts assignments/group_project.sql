-- Project 3 Group C: Daniel DeCarlo, Dave Ng’ang’a, Joey Molino


/*Don Hawk - SPEEDWAY MOTORSPORTS, INC.'S DON HAWK NAMED CHIEF RACING DEVELOPMENT OFFICER - Nascar racing

●	Columns needed:
○	Name: Don Hawk 
○	Can they provide internships- YES
○	Contact information - (704) 455-4366 (Company phone number)
○	Current career - Racing development officer 
○	Degrees from cairn - Null 
○	Company working for - Speedway Motorsports Incorporated 
○	Year of Graduation from cairn - Null*/
INSERT Into Cairn_Alumni (Name, Intern_Entry, Contact_Info, Current_Career, Cairn_Degrees, Graduate_Year)
Values ('Don_Hawk',
		'Yes',
		'7044554366',
		'Racing Development Officer',
		Null,
		Null
);
/*
●	BIO 
○	Age - Null
○	Birthplace - Null
○	Relationship Status - Null
○	Family - Null
○	Achievements -  executive vice president for U.S. Legend Cars International
○	Work place residence - Null
○*/	
INSERT INTO Bio (Age, Birthplace, Relationship, Family, Achievements, Work_Place)
Values (Null,Null, Null, Null, 'executive vice president for US Legends Cars international',Null);

/*
Da T.R.U.T.H - Christian rap artist, Philadelphia Biblical University , 

●	Columns needed:
○	Name: Emanuel Lee Lambert, Jr.
○	Can they provide internships: No
○	Contact information: Null
○	Current career: Rap/HipHop_Artist
○	Degrees from cairn: Null
○	Year of Graduation from cairn: Null*/
INSERT Into Cairn_Alumni (Name, Intern_Entry, Contact_Info, Current_Career, Cairn_Degrees, Graduate_Year)
Values ('Emanuel Lee Lambert, Jr.',
		'No',
		Null,
		RAP/HipHop_Artist,
		Null,
		Null
);
/*
●	BIO 
○	Age - 41
○	Birthplace - Philadelphia, PA
○	Relationship Status - Married
○	Family - Two Daughters
○	Achievements - 2 Grammy nominations, 4 stellar awards and 3 Dove nominations
○	Workplace residence - Freelance*/
INSERT INTO Bio (Age, Birthplace, Relationship, Family, Achievements, Work_Place)
Values (‘41’,’Philadelphia_PA’,’Married’,
 ‘Two Daughters’,
 ' 2 Grammy nominations, 4 stellar awards and 3 Dove nominations',
‘Freelance’);
/*
Allen C. Guezlo - American historian who serves as the Henry R. Luce III Professor of the Civil War Era at Gettysburg College. He has written more that 20 books. Rachel A. Shelden says that for two decades Guelzo "has been at the forefront of Civil War–era scholarship. Cairn University 1975/University of Pennsylvania. BS Biblical Studies."

●	Columns needed:
○	Name (Allen Guezlo)
○	Can they provide internships - No, Most likely more of an entry level job such as secretary, he is a professor so giving internships is most likely off the table
○	Contact information - Phone number to Gettysburg College, (717) 337-6300
○	Current career - Serves as the “Henry R. Luce III, Professor of the Civil War Era at Gettysburg College”
○	Degrees from cairn - BS in Biblical Studies 
○	Year of Graduation from cairn - 1975
●	BIO 
○	Age - February 2, 1953. 66
○	BIrthplace - Yokohama, Japan
○	Relationship Status - Married to Debra K. Hotchkiss since June 27, 1981
○	Family? - 2 daughters
○	Achievements - Written more than 20+ books, he was given the Choice Award in American Library Association, Albert C.Outler Prize, Lincoln Book prize for his book called: Then End of Slavery in America.
○	Workplace residence - 300 N Washington St. Gettysburg, PA 17325, Gettysburg College.
*/
CREATE TABLE Cairn_Alumni (
          Name varchar(255),
          Intern_Entry varchar(255),
          Contact_Info bigint,
          Current_Career varchar(255),
          Cairn_Degrees varchar(255),
          Graduate_Year bigint
);

INSERT INTO Cairn_Alumni (Name, Intern_Entry, Contact_Info, Current_Career, Cairn_Degrees, Graduate_Year)
Values
('Allen Guezlo', 'Entry level maybe provided', 7173376300, 'Professor at Gettysburg College', 'BS in Biblical Studies', 1975);

CREATE TABLE Bio (
     	 Name varchar(255),
          Age bigint,
          Birthplace varchar(255),
          Relationship varchar(255),
          Family varchar(255),
          Achievements varchar(255),
          Work_Place varchar(255),
);

INSERT INTO Bio (Name, Age, Birthplace, Relationship, Family, Achievements, Work_Place)
Values
('Allen Guezlo', 66, 'Yokohama, Japan', 'Debra K. Hotchkiss', '2 Daughters', 'Written more than 20 plus books, received the Choice Award, the Albert C. Outler Prize, and the Lincoln Book Prize', '300 N Washington St. Gettysburg, PA 17325, Gettysburg College');
/*
Duane Litfin served as a pastor in First Evangelical Church, Memphis. Graduated from Philadelphia College of Bible, Purdue University, and University of Oxford. Undergraduate in Biblical Studies, and a Masters in Theology.

●	Columns needed:
○	Name (first,Last) Duane Litfin 
○	Can they provide internships No, the church can possibly provide internships to people studying in the school of divinity. The church would welcome people who want to serve the church. 
○	Contact information- 630-752-5000
○	Current career- Author
○	Degrees from cairn- received a bachelor's degree in biblical studies and received a masters in theology. 
○	Year of Graduation from cairn N/A*/
INSERT INTO Cairn_Alumni (Name, Intern_Entry, Contact_Info, Current_Career, Cairn_Degrees, Graduate_Year)
Values
('Duane Litfin', 'no', 6307525000, 'Author', 'BS in Biblical Studies and masters in theology', NULL);

/*
●	BIO 
○	Age 75 
○	Birthplace- Detroit, Michigan, US
○	Relationship Status- Married 
○	Family?- 3 children and 9 grandchildren
○	Achievements- former president of Wheaton College/wrote several books/senior pastor of Evangelical church in Memphis TN. 
○	Workplace residence- N/A
*/


INSERT INTO Bio (Age, Birthplace, Relationship, Family, Achievements, Work_Place)
Values
(75, 'Detroit,Michigan', 'Sherri Litfin', '2 Daughters and 9 grandchildren', 'Former president of Wheaton college and several books and was senior pastor of Evangelical church in Memphis TN', 'N/A');

/*

Leslie Acosta - Leslie Acosta is a former Democratic member of the Pennsylvania House of Representatives representing the 197th House district in Philadelphia, Pennsylvania. She is the daughter of former state representative Ralph Acosta and the first Latina elected to the Pennsylvania Legislature. BA Social work and Theology.

●	Columns needed:
○	Name (Leslie Acosta)
○	Can they provide internships - Most likely no, as she is a current adjunct professor and has a history of being in prison for money laundering.
○	Contact information - (610) 341-5800
○	Current career - Adjunct Professor at Esperanza College of Eastern University
○	Degrees from cairn - BA in Social Work and Theology
○	Year of Graduation from cairn - 1996
●	BIO 
○	Age - Born July 7, 1971, 48
○	Birthplace - Puerto Rico
○	Relationship Status - None
○	Family? - None
○	Achievements - Former member of the Pennsylvania House of Representatives from the 197th district from January 6,2015 - January 2017
○	Workplace residence - 1300 Eagle Rd. St. Davids, PA 19087, Eastern University.
*/

CREATE TABLE Cairn Alumni (
        	Name varchar(255),
        	Intern_Entry varchar(255),
        	Contact_Info int,
        	Current_Career varchar(255),
        	Cairn_Degrees varchar(255),
        	Graduate_Year int,
);
INSERT INTO Cairn Alumni (Name, Intern_Entry, Contact_Info, Current_Career, Cairn_Degrees, Graduate_Year)
Values
('Leslie Acosta', 'No', 6103415800, 'Adjunct Professor Eastern University', 'BA in Social Work and theology', 1996);
CREATE TABLE Bio (
        	Name varchar(255),
        	Age int,
        	Birthplace varchar(255),
        	Relationship varchar(255),
        	Family varchar(255),
        	Achievements varchar(255),
        	Work_Place varchar(255),
);
INSERT INTO Bio (Name, Age, Birthplace, Relationship, Family, Achievements, Work_Place)
Values
('Leslie Acosta', 48, 'Puerto Rico', 'Null', 'Null', 'Former member of the Pennsylvania House of Representatives from the 197th district', '1300 Eagle Rd. St. Davids, PA 19087, Eastern University');


