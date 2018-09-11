import java.time.*;
import java.time.temporal.*;
public class DateTimeEx {
	public static void main(String ar[]){
		LocalDate ld=LocalDate.now();
		System.out.println("Date: "+ld);
		LocalTime lt=LocalTime.now();
		System.out.println("Time: "+lt);
		MonthDay md=MonthDay.now();
		System.out.println("Month Day: "+md);
		YearMonth ym=YearMonth.now();
		System.out.println("Year Month : "+ym);
		ld=LocalDate.of(2018,5,30);
		System.out.println("Converted: "+ld);
		ld= ld.plusDays(2);
		System.out.println("Added: "+ld);
		
		LocalDateTime ldt=LocalDateTime.now();
		System.out.println(ldt);
		System.out.println("Day: "+ldt.getDayOfMonth());
		System.out.println("Month: "+ldt.getMonth());
		System.out.println("Year: "+ldt.getYear());
		
		LocalDate today=LocalDate.now();
		LocalDate bday=LocalDate.of(1996,1,25);
		Period p=Period.between(bday,today);
		System.out.println("Age is \nYears: "+p.getYears());
		System.out.println("Months : "+p.getMonths());
		System.out.println("Days: "+p.getDays());
		
		LocalDate rdate=LocalDate.of(2018,4,17);
		long delay=ChronoUnit.DAYS.between(rdate,today);
		System.out.println("Delay: "+delay);
	}
}