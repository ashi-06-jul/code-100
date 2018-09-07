public class CastingVar{
    public static void main(String[] args) {
        
        int MO = 75;
        int MM = 90;
        int per;
        double percentage;
        double mPer;
        per = 100* MO/MM;
        
        // 75/90 = 0.83333333

        percentage = 100* MO/MM;

        mPer = (double)MO/MM * 100;

        System.out.println("Percentage marks are: "+ per);
        // 83

        System.out.println("Percentage marks are to decimal: "+ percentage);
        //83.000000
        //83.333334

        System.out.println("Percentage marks are to decimal: "+ mPer);
        //83.3334


    
    }
    
}