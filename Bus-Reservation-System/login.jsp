<html>
<body>
<%@ page import="java.sql.*"%>
<%@ page import="javax.sql.*"%>



<%

 
Class.forName("oracle.jdbc.driver.OracleDriver");
Connection con=DriverManager.getConnection("jdbc:oracle:thin:system/sagar@localhost:1521:orcl");


  String str1=request.getParameter("Username");
  String str2=request.getParameter("Password");
 
  if(str1.equalsIgnoreCase("sagar") && str2.equals("sagar"))
  {
    response.sendRedirect("generic.jsp");
  }
  else
  {
    out.println("<h3>Sorry, Wrong Credentials!!!</h3>");    
}
%>
 
</body>
</html>