insert into 
  phplogin.users ( 
    user_first, 
    user_last, 
    user_email, 
    user_adress, 
    user_postalcode, 
    user_city, 
    user_dob, 
    user_gender, 
    user_username,
    user_type,
    user_payment_status, 
    user_tlf
  )
values
  (
    'Runar', 
    'Grønås', 
    'Runar@hackerman.no', 
    'Hackertown', 
    '420', 
    'Kristiansand', 
    '1998-05-15', 
    'Mann', 
    'legend69',
    'leder',  
    'betalt', 
    '29568143' 
  );

insert into 
  phplogin.users ( 
    user_first, 
    user_last, 
    user_email, 
    user_adress, 
    user_postalcode, 
    user_city, 
    user_dob, 
    user_gender, 
    user_username,
    user_type,
    user_payment_status, 
    user_tlf
  )
values
  (
    'Sindre', 
    'Sindur', 
    'Sindur@hackerboy.no', 
    'Hackertown', 
    '420', 
    'Kristiansand', 
    '1996-05-15', 
    'Mann', 
    'Sindurmannen',
    'medlem',  
    'ubetalt', 
    '25151253' 
  );

  insert into 
  phplogin.users ( 
    user_first, 
    user_last, 
    user_email, 
    user_adress, 
    user_postalcode, 
    user_city, 
    user_dob, 
    user_gender, 
    user_username,
    user_type,
    user_payment_status, 
    user_tlf
  )
values
  (
    'Keeeeviiinn', 
    'KEEEVIIINNN', 
    'KeviKev@Start.no', 
    'Kevintown', 
    '5959', 
    'Kristiansand', 
    '1992-03-21', 
    'Kvinne', 
    'KevinnIsCool',
    'medlem',  
    'betalt', 
    '25151253' 
  );

insert into 
  phplogin.interests (
    interest_info
  )
values
  ('shadowlands'),
  ('league of legends'),
  ('fotball'),
  ('handball');

insert into 
  phplogin.interests_bridge (
    interest_ID, 
    user_ID
  )
values
  (1,1),
  (2,1),
  (2,2),
  (3,2),
  (4,3),
  (4,1);

insert into 
  phplogin.courses (
    course_start_date, 
    course_end_date,
    course_name, 
    course_info
  )
values
  (
    '2021.01.06',
    '2021.02.06',
    'BACIT-Is105',
    'PHP kurs for bachelor studenter'
  ),
  (
    '2020.01.06',
    '2020.01.06',
    'JAVA-IS102',
    'Introduksjons kurs til java programering'
  ),
  (
    '2021.01.15',
    '2021.01.18',
    'Fotball kurs',
    'Fotball kurs for alle NEO medlemer'
  );