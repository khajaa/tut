
##Android - File IO and CSV

###CSV
        InputStream is = getResources().openRawResource(R.raw.cities);
        Scanner scanner = new Scanner(is);
        while(scanner.hasNextLine()){
            String[] parts = scanner.nextLine().split(",");
            Log.v("myapp",parts[1] + "," + parts[2]);
        }



