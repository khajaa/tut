
##iPhone - Zip and Unzip

###LiteZip

.h and .c files
http://xxki.com/tutorial/pukiwiki.php?plugin=attach&pcmd=open&file=LiteUnzip.zip&refer=MacOS%2FiPhone%20-%20Zip%20and%20Unzip

```objective-c
 ```

```objective-c
 	if (data == nil) {
 		return nil;
 	}
 	NSMutableArray* files = nil;
 	HUNZIP huz;
 	
 	
 	DWORD result = UnzipOpenBuffer(&huz, (void*)[data bytes], [data length], NULL);
 	
 	@try {
 		NSString *tempPath = DOC_DIR;////[NSTemporaryDirectory() stringByAppendingPathComponent:@"installXXXXXX"];
 		char pathChars[PATH_MAX + 1];
 		pathChars[PATH_MAX] = 0;
 		[tempPath getFileSystemRepresentation:pathChars maxLength:(PATH_MAX + 1)];				
 		
 		mkdtemp(pathChars);				
 		
 		NSString* basePath = cStringToNSString(pathChars);
 		
 		
 		
 		ZIPENTRY	ze;
 		DWORD		numitems;
 		
 		// Find out how many items are in the archive.
 		ze.Index = (DWORD)-1;
 		if ((UnzipGetItem(huz, &ze))) 
 			return nil;
 		
 		numitems = ze.Index;
 		
 		NSLog(@"numitems %d",ze.Index);
 		
 		if (numitems > 100000) {
 			NSLog(@"too many files error (start extracting while it's copying??)");
 			UnzipClose(huz);
 			return nil;
 		}
 		
 		files = [NSMutableArray arrayWithCapacity:numitems];
 		
 		//NSLog(@"progress total: %d",mProgressTotal);
 		mProgressTotal = 2*numitems;
 
 		
 		// Unzip each item, using the name stored (in the zip) for that item.
 		for (ze.Index = 0; ze.Index < numitems; ze.Index++) {
 			
 			mProgressCurrent++;
 			//[self performSelectorInBackground:@selector(updateProgress) withObject:nil];
 			[self performSelectorOnMainThread:@selector(updateProgress) withObject:nil waitUntilDone:true];
 			//[self performSelector:@selector(updateProgress) withObject:nil afterDelay:0.0];
 			
 			
 			if (UnzipGetItem(huz, &ze))
 				break;
 			
 			//NSAutoreleasePool *pool = [[NSAutoreleasePool alloc] init];
 			
 			NSString *name = cStringToNSStringNoCopy(ze.Name);
 			NSString *fileName = [basePath stringByAppendingPathComponent:name];
 			
 			//printf("\rprocessing file %d",ze.Index);
 			
 			//NSLog(@"file:%@",fileName);
 			
 			[files addObject:fileName];
 			//NSLog(@"num %@",fileName);
 			//UnzipItemToFile(huz, [fileName cStringUsingEncoding:[NSString defaultCStringEncoding]], &ze);
 			UnzipItemToFile(huz, [fileName cStringUsingEncoding:NSUTF8StringEncoding], &ze);
 			[name release];
 			//[pool release];
 		}
 	}
 	@catch (NSException *exception) {
 		NSLog(@"unzip exception: Caught %@: %@", [exception name], [exception reason]);
 	}
 	@finally {
 		UnzipClose(huz);
 	}
 	return files;
 }
 ```


http://www.codeproject.com/KB/library/LiteZip.aspx
http://aussiebloke.blogspot.com/2009/04/small-zip-unzip-library.html
http://github.com/scarnie/c64iphone/blob/master/Classes/LiteUnzip.h
http://github.com/scarnie/c64iphone/blob/master/Classes/LiteUnzip.c



###MinZip

See my GeoGears project - www.geogearsapp.com 
This does not extract subfolder, so basically, I recommend to use LiteZip



