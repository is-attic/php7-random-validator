```
# build image
./build.alpine 

# run case
./run.alpine alpine 3000000 | sort | uniq -c | sort -n -r |head -20
```

