public class App3 {
   
   
    public static void main(String[] args) {
     Author author = new Author("name1", "name1@email.com","man");
     Book book = new Book("Naam2", author, 2.0);
      
      
    //  System.out.println(author);
    //  System.out.println(book);
     
     System.out.println(book.getAuthorName());
     System.out.println(book.getAuthorEmail());
     System.out.println(book.getAuthorGender());
     
     
     }
     
  
 }
 
 
 
 class Author {
     private String name, email, gender;
    
    
     public Author(String name, String email,String gender) {
        this.name = name;
        this.email = email;
        this.gender = gender;
     
   }
   
    @Override
     public String toString(){
         return "Author[name=" + name + ", email=" + email + ", gender=" + gender + "]" ;
     }
 
     
      public String getName() {
         return name;
     }
 
     public String getEmail() {
         return email;
     }
 
     public String getGender() {
         return gender; 
     }
 
     public void setName(String name) {
         this.name = name;
     }
 
     public void setEmail(String email) {
         this.email = email;
     }
     public void setGender(String gender){
         this.gender = gender;
     }

 }
 
 
 class Book{
  	private String name; 
   private Author author;
   private int qty;
   private double price;
   
   
   @Override
   public String toString(){
     return "Book[name=" + name + ", " + author.toString() + 
     ", price=" + price + ", qty=" + qty + "]";
   }
     
   
   public Book(String name, Author author, double price, int qty){
    this.name = name;
    this.author = author;
    this.price = price;
    this.qty = qty;
   }
   
   public Book(String name, Author author, double price){
    this.name = name;
    this.author = author;
    this.price = price;
   }
   
   public String getName() {
         return name;
   }
   public void setName(String name) {
       this.name = name;
   }
   
   public Author getAuthor() {
         return author;
   }
   public void setAuthor(Author author) {
       this.author = author;
   }
   
   public int getQty() {
         return qty;
   }

   public void setQty(int qty) {
       this.qty = qty;
   }
   public double getPrice() {
         return price;
   }
   public void setPrice(double price) {
       this.price = price;
   }
   
   public String getAuthorName(){
     return author.getName();
   }
   
   public String getAuthorEmail(){
     return author.getEmail();
   }
   
   public String getAuthorGender(){
     return author.getGender();
   }
   
 }		
 
 
 