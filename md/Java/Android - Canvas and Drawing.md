
##Android - Canvas and Drawing

###Draw Image as a Bitmap
        public void onDraw(Canvas canvas) {
            Bitmap bmp = BitmapFactory.decodeResource(getResources(), R.drawable.image_1);
            canvas.drawColor(Color.BLACK);
            canvas.drawBitmap(bmp, 100, 100, null);
        }



